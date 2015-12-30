<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>

	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/formreset.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/template.css">
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/teacher.css" />

	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/news.css" />
	<link rel="stylesheet" href="/embahust/Public/home/css/style.css">
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/focus_box.css">
	<script type="text/javascript" src="/embahust/Public/home/js/jquery.js"></script>
	<script>
		$(document).ready(function() {
			$('.search-btn').click(function(event) {
			
				var value=$('.search').val();
				$.ajax({
					url: '<?php echo U('/searchcer');?>'+"?"+Math.random(),
					type: 'post',
					data: {number: value},
					success:function(response){
						response=eval(response);
						var str ="";
						if(response.length>0){
							str = "姓名:"+response[0].name+"证书编号:"+response[0].number+"班级:"+response[0].class;
							alert(str);
						}else{
							alert('没有证书信息，请检查输入是否正确。');
						}
					}
				});
			});
		});
	</script>
</head>
<body>
	<!-- 代码开始 -->
	<div class="main-im" style='z-index:9999;'>
		<div id="open_im" class="open-im">&nbsp;</div>
		<div class="im_main" id="im_main">
			<div id="close_im" class="close-im">
				<a href="javascript:void(0);" title="µã»÷¹Ø±Õ">&nbsp;</a>
			</div>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=315955204&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="QQ咨询">
				<div class="qq-container"></div>
				<div class="qq-hover-c">
					<img class="img-qq" src="/embahust/Public/home/image/qq.png"></div>
				<span>QQ在线咨询</span>
			</a>
			<div class="im-tel">
				<div>电话咨询</div>
				<div class="tel-num" style="margin-bottom:-20px;">027-87540112</div>
			</div>
			<div class="im-footer" style="position:relative">
				<div class="weixing-container">
					<div class="weixing-show">
						<div class="weixing-txt">
							微信扫一扫
							<br>关注微信公共号</div>
						<img class="weixing-ma" src="/embahust/Public/home/image/weixing-ma.jpg">
						<div class="weixing-sanjiao"></div>
						<div class="weixing-sanjiao-big"></div>
					</div>
				</div>
				<div class="go-top">
					<a href="javascript:;" title="回到顶部"></a>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<!-- 代码结束 -->
	<div id="header">
		<div class="header-content">
			<a href="<?php echo U('index');?>" class="logo">
				<img src="/embahust/Public/home/image/logo.jpg" alt="回到首页"  style="height:80px;margin-top:10px;" />
			</a>
			<div class="cut-off-line"></div>
			<div class="title">
				<h2 style="letter-spacing: 1px;">人才培训中心（TDP）</h2>
				<div class="level-line"></div>
				<h2>国学研究院文化交流中心</h2>
			</div>
			<!-- title end -->
			<div class="slogan">
				<p class="slogan-content">以学聚友 以友辅仁</p>
				<p class="phone">
					<img src="/embahust/Public/home/image/dianhua.jpg" />
					<span>027-87540112</span>
				</p>
			</div>
			<!-- slogan end -->
			<div class="search-box">
				<div class="collect">
					<span>
						<a href="#" id="addfavorite">加入收藏</a>
					</span>
					<div></div>
					<span>
						<a href="<?php echo U('/entry');?>">联系我们</a>
					</span>
				</div>

				<div>
					<input type="text"  placeholder="输入证书编号查询" name="number" class="search" />
					<input type="submit" value="" class="search-btn" /> <i class="fa fa-search dingwei"></i>
				</div>
			</div>
			<!-- search-box end-->
		</div>
		<!-- header-content end -->
	</div>

	<div id = "navigation">
		<ul>
			<li id = "first">
				<dl>
					<dt>
						<a href=<?php echo U('/index');?>>网站首页</a>
					</dt>
				</dl>
			</li>
			<li id ="info">
				<dl>
					<dt>
						<a href=<?php echo U('/info');?>>中心介绍</a>
					</dt>
				</dl>
			</li>
			<li id = "newsli">
				<dl>
					<dt>
						<a href=<?php echo U('/news/1');?>>新闻资讯</a>
					</dt>
					<dd class = "newsdd">
						<a href=<?php echo U('/news/1');?>>新闻资讯</a>
						<a href=<?php echo U('/news/2');?>>通知公告</a>
						<a href=<?php echo U('/news/3');?>>招生信息</a>

					</dd>
				</dl>
			</li>
			<li id = "teachli">
				<dl>
					<dt>
						<a href=<?php echo U('/edu/1');?>>教育项目</a>
					</dt>
					<dd class = "teachdd">
						<a href=<?php echo U('/edu/1');?>>国学大讲堂</a>
						<a href=<?php echo U('/edu/2');?>>精品研修班</a>
						<a href=<?php echo U('/edu/3');?>>职业训练营</a>
					</dd>
				</dl>
			</li>
			<li id = "talentli">
				<dl>
					<dt>
						<a href=<?php echo U('/tra/1');?>>人才培训</a>
					</dt>
					<dd class = "talentdd">
						<a href=<?php echo U('/tra/1');?>>企业内训</a>
						<a href=<?php echo U('/tra/2');?>>干部培训</a>
						<a href=<?php echo U('/tra/3');?>>行业定制</a>
					</dd>
				</dl>
			</li>
			<li id = "educateli">
				<dl>
					<dt>
						<a href=<?php echo U('/stu/1');?>>教学教务</a>
					</dt>
					<dd class = "educatedd">
						<a href=<?php echo U('/stu/1');?>>教务管理</a>
						<a href=<?php echo U('/stu/2');?>>培训教室</a>
						<a href=<?php echo U('/stu/3');?>>后勤保障</a>
					</dd>
				</dl>
			</li>
			<li id = "expertli">
				<dl>
					<dt>
						<a href=<?php echo U('/tea/1');?>>师资力量</a>
					</dt>
					<dd class = "expertdd">
						<a href=<?php echo U('/tea/1');?>>院校名师</a>
						<a href=<?php echo U('/tea/2');?>>实战专家</a>
					</dd>
				</dl>
			</li>
			<li id="entry">
				<dl>
					<dt>
						<a href =<?php echo U('/entry');?> >在线报名</a>
					</dt>
				</dl>
			</li>
		</ul>

	</div>
<link href="/embahust/Public/home/css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/embahust/Public/home/css/juicyslider.css" type="text/css" />
<div class="navImage">
	<div id="myslider" class="juicyslider">
		<ul>
			<?php foreach($hot as $v):?>
			<li>
				<a href=<?php echo U('/'.$v['name']."/".$v['class']."/".$v['id']);?>>
					<img  src=<?="/embahust".substr($v['picture'], 1)?>
					title="<?php echo ($v["title"]); ?>" />
					<div class='navTitle'><?php echo ($v["title"]); ?></div>
				</a>
			</li>
			<?php endforeach;?></ul>
		<div class="nav next"></div>
		<div class="nav prev"></div>
		<!-- <div class="mask"></div> -->
	</div>
</div>
<div class="main-body">

	<div class="comleft left theborder">
		<div class='section-bar'>
			<span>&nbsp;&nbsp;新闻资讯</span>
			<a href="<?php echo U('/news/1');?>">更多</a>
		</div>
		<div id="demo1" class="slideBox">
			<ul class="items">
				<?php foreach($arr1 as $k=> $v):?>
				<?php if(!empty($v['picture'])):?>
				<li>
					<a href=<?php echo U('/news/1/'.$v['id']);?>>
						<img src=<?="/embahust".substr($v['picture'], 1)?>
						title=<?php echo ($v["title"]); ?>  style="padding:10px;"width=260 height="225">
					</a>
				</li>
				<?php endif;?>
				<?php endforeach;?></ul>
		</div>
		<div class="rightText">
			<ul>
				<?php foreach($arr1 as $k=> $v):?>
				<li>
					<a href=<?php echo U('/news/1/'.$v['id']);?>>
						<span class='span1'><?php echo ($v["title"]); ?></span>
						<span class = "span2"><?php echo ($v["date"]); ?></span>
					</a>

				</li>
				<?php endforeach;?></ul>
		</div>
	</div>
	<div class="comright right  theborder">
		<div class='section-bar'>
			<span>&nbsp;&nbsp;通知公告</span>
			<a href="<?php echo U('/news/2');?>">更多</a>
		</div>
		<div class="rightText">
			<ul>
				<?php foreach($arr2 as $k=> $v):?>
				<li>
					<a href=<?php echo U('/news/2/'.$v['id']);?>>
						<span class='span1'><?php echo ($v["title"]); ?></span>
						<span class = "span2"><?php echo ($v["date"]); ?></span>
					</a>

				</li>
				<?php endforeach;?></ul>
		</div>

	</div>
	<div class="comleft" style="margin-top:0px;">
		<div class="comleft left  theborder">
			<div class='section-bar'>
				<span>&nbsp;&nbsp;教育项目</span>
				<a href="<?php echo U('/edu/1');?>">更多</a>
			</div>
			<div id="demo2" class="slideBox">
				<ul class="items">
					<?php foreach($arr3 as $k=> $v):?>
					<?php if(!empty($v['picture'])):?>
					<?php  switch($v['class']){ case 4:$v['class'] = 1;break; case 5:$v['class'] = 2;break; case 6:$v['class'] = 3;break; }; ?>
					<li>
						<a href=<?php echo U('/edu/'.$v['class'].'/'.$v['id']);?>>
							<img src=<?="/embahust".substr($v['picture'], 1)?>
							title=<?php echo ($v["title"]); ?> style="padding:10px;"width=260 height="225">
						</a>
					</li>
					<?php endif;?>
					<?php endforeach;?></ul>
			</div>
			<div class="rightText">
				<ul>
					<?php foreach($arr3 as $k=> $v):?>
					<?php  switch($v['class']){ case 4:$v['class'] = 1;break; case 5:$v['class'] = 2;break; case 6:$v['class'] = 3;break; }; ?>
					<li>
						<a href=<?php echo U('/edu/'.$v['class'].'/'.$v['id']);?>>
							<span class='span1'><?php echo ($v["title"]); ?></span>
							<span class = "span2"><?php echo ($v["date"]); ?></span>
						</a>

					</li>
					<?php endforeach;?></ul>
			</div>
		</div>
		<div class="comleft left  theborder">
			<div class='section-bar'>
				<span>&nbsp;&nbsp;人才培训</span>
				<a href="<?php echo U('/tra/1');?>">更多</a>
			</div>
			<div id="demo3" class="slideBox">
				<ul class="items">
					<?php foreach($arr4 as $k=> $v):?>
					<?php if(!empty($v['picture'])):?>
					<?php  switch($v['class']){ case 7:$v['class'] = 1;break; case 8:$v['class'] = 2;break; case 9:$v['class'] = 3;break; }; ?>
					<li>
						<a href=<?php echo U('/tra/'.$v['class'].'/'.$v['id']);?>>
							<img src=<?="/embahust".substr($v['picture'], 1)?>
							title=<?php echo ($v["title"]); ?> style="padding:10px;"width=260 height="225">
						</a>
					</li>
					<?php endif;?>
					<?php endforeach;?></ul>
			</div>
			<div class="rightText">
				<ul>
					<?php foreach($arr4 as $k=> $v):?>
					<?php  switch($v['class']){ case 7:$v['class'] = 1;break; case 8:$v['class'] = 2;break; case 9:$v['class'] = 3;break; }; ?>
					<li>
						<a href=<?php echo U('/tra/'.$v['class'].'/'.$v['id']);?>>
							<span class='span1'><?php echo ($v["title"]); ?></span>
							<span class = "span2"><?php echo ($v["date"]); ?></span>
						</a>

					</li>
					<?php endforeach;?></ul>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>

	<div class="comright rheight  theborder" style="border-top:5px solid rgb(201,0,1) !important;">
		<div class="teaBar">院校名师</div>
		<div class="teaBar teaBgc">实战专家</div>
		<div class='teaList'>
			<ul>
			
			<?php foreach($tea1 as $v):?>
			<li>
				<a href="<?php echo U('/tea/1/'.$v['id']);?>">
				<img src=<?="/embahust".substr($v['picture'], 1)?> title="<?php echo ($v["name"]); ?>"/>
				</a>

			</li>
			<?php endforeach;?> 
			</ul>
		</div>
		<div class='teaList teaDis'>
			<ul>
				<?php foreach($tea2 as $v):?>
			<li>
				<a href="<?php echo U('/tea/2/'.$v['id']);?>">
				<img src=<?="/embahust".substr($v['picture'], 1)?> title="<?php echo ($v["name"]); ?>"/>
				</a>

			</li>
			<?php endforeach;?> 
			</ul>
		</div>

	</div>
</div>

<script src="/embahust/Public/home/js/jquery.slideBox.min.js" type="text/javascript"></script>
<script src="/embahust/Public/home/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/embahust/Public/home/js/juicyslider-min.js"></script>
<script>

jQuery(function($){
	$('#demo1').slideBox({
		hideBottomBar : true,
	});
	$('#demo2').slideBox({
		hideBottomBar : true,
		
	});
	$('#demo3').slideBox({
		hideBottomBar : true,
	});
	$(function() {
                $('#myslider').juicyslider();
            });
	$('.teaBar').each(function(index) {
		var i = index;
		$(this).click(function(event) {
			$('.teaBar').addClass('teaBgc');
			$('.teaBar').eq(i).removeClass('teaBgc');
			$('.teaList').hide();
			$('.teaList').eq(i).show();
		});
	});
	/*$('#demo2').slideBox({
		direction : 'top',//left,top#方向
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		startIndex : 1//初始焦点顺序
	});
	$('#demo3').slideBox({
		duration : 0.3,//滚动持续时间，单位：秒
		easing : 'linear',//swing,linear//滚动特效
		delay : 5,//滚动延迟时间，单位：秒
		hideClickBar : false,//不自动隐藏点选按键
		clickBarRadius : 10
	});
	$('#demo4').slideBox({
		hideBottomBar : true//隐藏底栏
	});*/
});
</script>
	<div style="clear:both;"></div>
	<div id="footer">
		<div class="footer-wrap"style="position:relative;">
			<div class="footer-wrap-content" >
				<p>
					友情链接&nbsp;:
					<a href="http://www.hust.edu.cn" target="blank">华中科技大学</a>
					&nbsp;xxxxxx公司 &nbsp;版权所有
				</p>
				<p>地址&nbsp;: 武汉市洪山区珞瑜路1037号</p>
			</div>
			<img id="erweima"src="/embahust/Public/home/image/weixing-ma.jpg" style="width: 68px; height: 68px;" />
			<div id="lgerweima"style="position:absolute; border-radius:4px;box-shadow:0 0 5px red;width:200px;height:200px;left:250px;top:-100px;display:none;"> <img src="/embahust/Public/home/image/weixing-ma.jpg" alt="" style="width:200px;height:200px;margin:0px;">
			</div>
		</div>
		<!-- footer-wrap end -->
	</div>
	<!-- footer end -->
	
	
	<script type="text/javascript" src="/embahust/Public/home/js/common.js"></script>
	
	<script>
	$('doucument').ready(function(){
		$("#<?php echo ($li); ?> dt a").addClass('special');
		$(".top-bar ul li").eq(<?php echo ($id-1); ?>).children('a').css({
			'font-weight':800,
			'font-size':"16px",
			"color":'#d20000',
		});
		$('.rank-bar span:lt(3)').css({
			'background': '#d31515',
			
		});
		$('.rank-bar a').eq(0).css({
			'color': '#d83333',
			'font-weight':"bolder"
		});
		$("#erweima").hover(function() {
			$("#lgerweima").fadeIn(500);
		}, function() {
			$("#lgerweima").fadeOut(500);
		});
		
	});
		
	</script>
</body>
</html>