$(document).ready(function(){
			var dtcss = {
				background:'white',
				color:'red',
				borderBottom:'1px solid rgb(176,176,176)',
			};
			var dtcssfor = {
				background:'rgb(50, 50, 50)',
				color:'white',
				borderBottom:'0',
			}
			$("#teachli").hover(function(){
				$(".expertdd").css("display", "none");
				$(".educatedd").css("display", "none");
				$(".newsdd").css("display", "none");
				$(".talentdd").css("display", "none");
				$(".teachdd").slideDown("fast");
				$("#teachli dt a").css(dtcss);
			},function(){
				$(".teachdd").stop();
				$(".teachdd").css("display", "none");
				$("#teachli dt a").css(dtcssfor);
			});

			$("#newsli").hover(function(){
				$(".expertdd").css("display", "none");
				$(".educatedd").css("display", "none");
				$(".teachdd").css("display", "none");
				$(".talentdd").css("display", "none");
				$(".newsdd").slideDown("fast");
				$("#newsli dt a").css(dtcss);
			},function(){
				$(".newsdd").stop();
				$(".newsdd").css("display", "none");
				$("#newsli dt a").css(dtcssfor);
			});
		

			$("#talentli").hover(function(){
				$(".expertdd").css("display", "none");
				$(".educatedd").css("display", "none");
				$(".teachdd").css("display", "none");
				$(".newsdd").css("display", "none");
				$(".talentdd").slideDown("fast");
				$("#talentli dt a").css(dtcss);
			},function(){
				$(".talentdd").stop();
				$(".talentdd").css("display", "none");
				$("#talentli dt a").css(dtcssfor);
			});
		

			$("#educateli").hover(function(){
				$(".expertdd").css("display", "none");
				$(".talentdd").css("display", "none");
				$(".teachdd").css("display", "none");
				$(".newsdd").css("display", "none");
				$(".educatedd").slideDown("fast");
				$("#educateli dt a").css(dtcss);
			},function(){
				$(".educatedd").stop();
				$(".educatedd").css("display", "none");
				$("#educateli dt a").css(dtcssfor);
			});

			$("#expertli").hover(function(){
				$(".educatedd").css("display", "none");
				$(".talentdd").css("display", "none");
				$(".teachdd").css("display", "none");
				$(".newsdd").css("display", "none");
				$(".expertdd").slideDown("fast");
				$("#expertli dt a").css(dtcss);
			},function(){
				$(".expertdd").stop();
				$(".expertdd").css("display", "none");
				$("dd").css("display", "none");
				$("#expertli dt a").css(dtcssfor);
			});
		
			$("#first").mouseover(
				function(){
					$("dd").css("display", "none");
			});
			$("#introli").mouseover(
				function(){
					$("dd").css("display", "none");
			});
			$("#onlineli").mouseover(
				function(){
					$("dd").css("display", "none");
			});
			$("ul").mouseleave(
				function(){
					$("dd").css("display", "none");
			});
			$("li").mouseleave(function(){
				$("dd").css("display", "none");
			});

		});

$(function(){
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').show();
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
});
var collect = document.getElementById("addfavorite");

    collect.onclick = function(){
        AddFavorite(window.location,document.title);
        return false;
    };

    function AddFavorite(sURL, sTitle)
    {
        try
        {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e)
        {
            try
            {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e)
            {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }