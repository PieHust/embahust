<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>国学研究院文化交流中心</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/formreset.css" />
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/template.css">
	<link rel="stylesheet" type="text/css" href="/embahust/Public/home/css/teacher.css" />
	<link rel="stylesheet" href="/embahust/Public/home/css/style.css">

	<script type="text/javascript" src="/embahust/Public/home/js/jquery.js"></script>
	<script type="text/javascript" src="/embahust/Public/home/js/lrtk.js"></script>
	<script type="text/javascript" src="/embahust/Public/home/js/navigation.js"></script>
	<script type="text/javascript" src="/embahust/Public/home/js/changepage.js"></script>
</head>
<body>
<!-- 代码开始 -->
<div class="main-im">
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="µã»÷¹Ø±Õ">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=315955204&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="QQ咨询">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="/embahust/Public/home/image/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		<div class="im-tel">
			<div>电话咨询</div>
			<div class="tel-num" style="margin-bottom:-20px;">027-87540112</div>
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					<div class="weixing-txt">微信扫一扫<br>关注微信公共号</div>
					<img class="weixing-ma" src="/embahust/Public/home/image/weixing-ma.jpg">
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="回到顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
<!-- 代码结束 -->
	<div id="header">
		<div class="header-content">
			<a href="index.html" class="logo"><img src="/embahust/Public/home/image/logo.jpg" alt="回到首页"  style="height:80px;margin-top:10px;" /></a>
			<div class="cut-off-line"></div>
			<div class="title">
				<h2 style="letter-spacing: 1px;">人才培训中心（TDP）</h2>
				<div class="level-line"></div>
				<h2>国学研究院文化交流中心</h2>
			</div><!-- title end -->
			<div class="slogan">
				<p class="slogan-content">以学聚友 以友辅仁</p>
				<p class="phone">
					<img src="/embahust/Public/home/image/dianhua.jpg" />
					<span>027-87540112</span>
				</p>
			</div><!-- slogan end -->			
			<div class="search-box">
				<div class="collect">
					<span><a href="#" id="addfavorite">加入收藏</a></span>
					<div></div>
					<span><a href="#">联系我们</a></span>
				</div>

				<form action="###" methon="###">
					<input type="text" value="" placeholder="输入证书编号查询" name="###" class="search" />
					<input type="submit" value="" class="search-btn" />
					<i class="fa fa-search dingwei"></i>
				</form>
			</div><!-- search-box end-->
		</div><!-- header-content end -->
	</div>


	<div id = "navigation">
		<ul>
			<li id = "first">
				<dl>
					<dt><a href=<?php echo U('/index');?>>网站首页</a></dt>
				</dl>
			</li>
			<li id ="info">
				<dl>
					<dt><a href=<?php echo U('/info');?>>中心介绍</a></dt>
				</dl>
			</li>
			<li id = "newsli">
				<dl>
					<dt><a href=<?php echo U('/news/1');?>>新闻资讯</a></dt>
					<dd class = "newsdd">
						<a href=<?php echo U('/news/1');?>>新闻资讯</a>
						<a href=<?php echo U('/news/2');?>>通知公告</a>
					</dd>
				</dl>
			</li>
			<li id = "teachli">
				<dl>
					<dt><a href=<?php echo U('/edu/1');?>>教育项目</a></dt>
					<dd class = "teachdd">
						<a href=<?php echo U('/edu/1');?>>国学大讲堂</a>
						<a href=<?php echo U('/edu/2');?>>精品研修班</a>
						<a href=<?php echo U('/edu/3');?>>职业训练营</a>
					</dd>
				</dl>
			</li>
			<li id = "talentli">
				<dl>
					<dt><a href=<?php echo U('/tra/1');?>>人才培训</a></dt>
					<dd class = "talentdd">
						<a href=<?php echo U('/tra/1');?>>企业内训</a>
						<a href=<?php echo U('/tra/2');?>>干部培训</a>
						<a href=<?php echo U('/tra/3');?>>行业定制</a>
					</dd>
				</dl>
			</li>
			<li id = "educateli">
				<dl>
					<dt><a href=<?php echo U('/stu/1');?>>教学教务</a></dt>
					<dd class = "educatedd">
						<a href=<?php echo U('/stu/1');?>>教务管理</a>
						<a href=<?php echo U('/stu/2');?>>培训教室</a>
						<a href=<?php echo U('/stu/3');?>>后勤保障</a>
					</dd>
				</dl>
			</li>
			<li id = "expertli">
				<dl>
					<dt><a href=<?php echo U('/tea/1');?>>师资力量</a></dt>
					<dd class = "expertdd">
						<a href=<?php echo U('/tea/1');?>>院校名师</a>
						<a href=<?php echo U('/tea/2');?>>专家学者</a>
					</dd>
				</dl>
			</li>
			<li id="entry">
				<dl>
					<dt><a href =<?php echo U('/entry');?> >在线报名</a></dt>
				</dl>
			</li>
		</ul>

	</div>

	
<div class="main-body">
<div class="top-pic">
		<img src="/embahust/Public/home/image/stu.jpg" style="width: 980px;height: 200px;" />
	</div><!-- top-pic end -->
		<div class="left-side-bar">
			<div class="top-bar">
				<p>教学教务<i class="fa fa-angle-down"></i></p>
				<ul>
					<li><a href="#">教务管理</a></li>
					<li><a href="#">培训教室</a></li>
					<li><a href="#">后勤保障</a></li>
				</ul>
			</div><!-- top-bar end -->
			<div class="middle-bar">
				<p>招生信息</p>
				<ul>
					<li><a href="#">国学班53期正在热招</a></li>
					<li><a href="#">国学班53期正在热招</a></li>
				</ul>
			</div><!-- middle-bar end -->
			<div class="rank-bar">
				<p>点击排行榜</p>
				<ul>
					<li><span style="background: #d31515;">1</span><a href="#" style="color: #d83333;">国学商道与楚商传承精品班</a></li>
					<li><span style="background: #d31515;">2</span><a href="#">荆楚女性学堂</a></li>
					<li><span style="background: #d31515;">3</span><a href="#">荆楚女性学堂</a></li>
					<li><span>4</span><a href="#">荆楚女性学堂</a></li>
					<li><span>5</span><a href="#">荆楚女性学堂</a></li>
					<li><span>6</span><a href="#">荆楚女性学堂</a></li>
					<li><span>7</span><a href="#">荆楚女性学堂</a></li>
					<li><span>8</span><a href="#">荆楚女性学堂</a></li>
					<li><span>9</span><a href="#">荆楚女性学堂</a></li>
					<li><span>10</span><a href="#">荆楚女性学堂</a></li>
				</ul>
			</div><!-- rank-bar end -->
		</div><!-- left-side-bar end -->

		<div class="content-wrap">
			<p class="location">
				<span>您现在的位置&nbsp;:</span>
				<a href=<?php echo U('/index');?>>首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
				<a href="">教学教务</a>
				
			</p><!-- location end -->
			<div class="sign-up">
				<span>招生火热进行中...</span>
				<a href="/embahust/Uploads/entryform.docx">报名表下载</a>
			</div><!-- sign-up end -->
			<div class="main-content">
				<h2>国学硕士研究生课程班招生简章</h2>
				<p class="date">2015.10.28 发布,&nbsp;<span>1000浏览</span></p>
				<p class="artical-content">
					
				</p>
				<p class="bottom-info">华中科技大学高级研修班即将开班，期待你的加入</p>
				<p class="bottom-info">咨询电话&nbsp;:&nbsp;027-87540112</p>
				<p class="bottom-info" style="padding-bottom: 40px;">地址&nbsp;:&nbsp;华中科技大学国学研究院文化中心</p>
			</div><!-- main-content end -->
		</div><!-- main-content end -->
		<!--清除浮动-->
		<div style="height: 0px; clear: both;"></div>
	</div><!-- main-body end -->
	<div id="footer">
		<div class="footer-wrap">
			<div class="footer-wrap-content">
				<p>友情链接&nbsp;: <a href="http://www.hust.edu.cn" target="blank">华中科技大学</a> &nbsp;xxxxxx公司 &nbsp;版权所有</p>
				<p>地址&nbsp;: 武汉市洪山区珞瑜路1037号</p>
			</div>
			<img src="/embahust/Public/home/image/erweima.jpg" style="width: 68px; height: 68px;" />
		</div><!-- footer-wrap end -->
	</div><!-- footer end -->
	<script type="text/javascript" src="/embahust/Public/home/js/addfavorite.js"></script>
	<script type="text/javascript" src="/embahust/Public/home/js/changepage.js"></script>
	<script>
		$("#<?php echo ($li); ?> dt a").addClass('special');
		
	</script>
</body>
</html>