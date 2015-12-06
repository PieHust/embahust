
function addLoadEvent(func){
	var oldonload = window.onload;
	if(typeof window.onload != "function"){
		window.onload = func;
	}
	else{
		window.onload = function(){
			oldonload();
			func();
		};
	}
}

function btnChangePage(){
	var allList = document.getElementById("pics-lists");
	var tempLists = allList.childNodes;
	var picLists = new Array();
	var btnWrap = document.getElementById("button-wrapper");
	var btnLists = new Array();
	var newPage = null;
	var allPage = null;
	var num = 9;

	if(allList.className == "news"){
		num = 16;
	}
	/*获取所有图片区域的li元素*/
	for(var i = 0, j = 0;i < tempLists.length;i++){
		if(tempLists[i].nodeType == 1){
			picLists[j] = tempLists[i];
			if(j < num){
				picLists[j].style.display = "list-item";
			}
			else{
				picLists[j].style.display = "none";
			}
			j++;
		}
	}

	/*获取用于换页的button及显示页码的span元素*/
	var wrapChilds = btnWrap.childNodes;

	for(var i = 0,j = 0;i < wrapChilds.length;i++){
		if(wrapChilds[i].nodeType == 1 && j < 4){
			btnLists[j] = wrapChilds[i];
			j++;
		}
		else if(j == 4 && wrapChilds[i].nodeType == 1){
			newPage = wrapChilds[i];
			j++;
		}
		else if(j == 5 && wrapChilds[i].nodeType == 1){
			allPage = wrapChilds[i];
			break;
		}
	}

	/*显示当前图片总页数*/
	var pages = Math.ceil(picLists.length / num);
	allPage.innerHTML = pages;

	/*点击改变图片显示页码函数*/
	function changePage(number){
		var temp = number * num;
		var n = picLists.length - temp;
		newPage.innerHTML = number + 1;
		for(var l = 0;l < picLists.length;l++){
			picLists[l].style.display = "none";
		}
		for(var k = 0;k < btnLists.length;k++){
			btnLists[k].className = "";
		}
		if(number == 0){
			btnLists[1].className = "previous-page";
		}
		else if(number == pages-1){
			btnLists[2].className = "previous-page";
		}

		if(n >= num){
			n = num;
		}
		for(var i = temp;i < temp + n;i++){
			picLists[i].style.display = "list-item";
		}
	}

	/*点击按钮换页*/
	var count = 0;
	for(var i = 0;i < btnLists.length;i++){
		if(pages == 1 || pages == 0){
			for(var k = 0;k < btnLists.length;k++){
				btnLists[k].className = "previous-page";
			}
		}else{
			btnLists[i].onclick = function(){
				if(this == btnLists[0]){
					changePage(0);
					count = 0;
				}
				else if(this == btnLists[1]){
					if(count != 0){
						count--;
					}
					changePage(count);
				}
				else if(this == btnLists[2]){
					if(count != pages-1){
						count++;
					}
					changePage(count);
				}
				else{
					changePage(pages-1);
					count = pages-1;
				}
			};
		}
	}
}

addLoadEvent(btnChangePage);