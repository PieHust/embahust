<?php if (!defined('THINK_PATH')) exit();?>
	<!DOCTYPE html>
<html>
<head>
	<title>新闻资讯</title>

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

				<form action="###" methon="###">
					<input type="text" value="" placeholder="输入证书编号查询" name="###" class="search" />
					<input type="submit" value="" class="search-btn" /> <i class="fa fa-search dingwei"></i>
				</form>
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

	<div class="main-body">
		
	<div class="top-pic">
		<img src="/embahust/Public/home/image/news.jpg" style="width: 980px;height: 200px;" />
	</div>

		<div class="left-side-bar">
			
	<div class="top-bar">
		<p>新闻资讯</p>
		<ul>
			<li>
				<a href="<?php echo U('/news/1');?>">新闻资讯</a>
			</li>
			<li>
				<a href="<?php echo U('/news/2');?>">通知公告</a>
			</li>
			<li>
				<a href="<?php echo U('/news/3');?>">招生信息</a>
			</li>
		</ul>
	</div>

			
			
				<div class="rank-bar">
					<p>点击排行榜</p>
					<ul>
						<?php foreach($rankArr as $k=>$v):?>
						<li>
							<span style="font-size:14px;"><?php echo ++$i;?></span>
					<a href=<?php echo U("/".$v['name']."/".$v['class']."/".$v['id']);?> ><?php echo ($v["title"]); ?></a>
						</li>
						<?php endforeach;?>

					</ul>
				</div>
			
		</div>

		<div class="content-wrap">
			<p class="location">
				<span>您现在的位置&nbsp;:</span>
				<a href=<?php echo U('/index');?>>首页</a>
				&nbsp;&nbsp;>&nbsp;&nbsp;
				
	<a href="">新闻资讯</a>


			</p>
			<!-- location end -->	
			<div class="sign-up">
				<span>招生火热进行中...</span>
				<a href="/embahust/Uploads/entryform.docx">报名表下载</a>
			</div>
			<!-- sign-up end -->
			
	<div class="news-wrap">
				<div class="news-box">
					<ul class="news" id="pics-lists">
					<?php foreach($arr as $v):?>
						<li>
							<a href="<?php echo U("/news/$id/".$v['id']);?>">● <?php echo ($v["title"]); ?></a><span><?php echo ($v["date"]); ?></span>
						</li>
					<?php endforeach;?>

		
					</ul><!-- pics-wrapper end -->

					<!--清除浮动-->
					<div style="height: 0px; clear: both;"></div>

					<p id="button-wrapper" class="btn-wrap">
						<button>首页</button>
						<button class="previous-page">上一页</button>
						<button>下一页</button>
						<button>尾页</button>&nbsp;&nbsp;
						页码&nbsp;:&nbsp;<span>1</span>&nbsp;/&nbsp;<span>6</span>
					</p><!-- btn-wrap end -->
				</div><!-- teacher-pics end -->

				<div class="other-info">
					<p class="contact-info">华中科技大学高级研修班即将开班，期待你的加入</p>
					<p class="contact-info">咨询电话&nbsp;:&nbsp;027-87540112</p>
					<p class="contact-info" style="padding-bottom: 40px;">地址&nbsp;:&nbsp;华中科技大学国学研究院文化中心</p>
				</div>

			</div>

			<!-- main-content end -->	
		</div>
		<!-- main-content end -->	
		<!--清除浮动-->	
		<div style="height: 0px; clear: both;"></div>
	</div>
	
<script type="text/javascript" src="/embahust/Public/home/js/changepage.js"></script>
	<div id="footer">
		<div class="footer-wrap">
			<div class="footer-wrap-content">
				<p>
					友情链接&nbsp;:
					<a href="http://www.hust.edu.cn" target="blank">华中科技大学</a>
					&nbsp;xxxxxx公司 &nbsp;版权所有
				</p>
				<p>地址&nbsp;: 武汉市洪山区珞瑜路1037号</p>
			</div>
			<img src="/embahust/Public/home/image/erweima.jpg" style="width: 68px; height: 68px;" />
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
		
	});
		
	</script>
</body>
</html>