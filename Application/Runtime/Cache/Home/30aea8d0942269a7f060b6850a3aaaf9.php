<?php if (!defined('THINK_PATH')) exit();?>
<div class="main-body">
	<div class="top-pic">
		<img src="/embahust/Public/home/image/info.jpg" style="width: 980px;height: 200px;" />
	</div>
	<!-- top-pic end -->
	<div class="left-side-bar">
		<div class="middle-bar">
			<p>招生信息</p>
			<ul>
				<li>
					<a href="#">国学班53期正在热招</a>
				</li>
				<li>
					<a href="#">国学班53期正在热招</a>
				</li>
			</ul>
		</div>
		<!-- middle-bar end -->
		<div class="rank-bar">
			<p>点击排行榜</p>
			<ul>
				<li>
					<span style="background: #d31515;">1</span>
					<a href="#" style="color: #d83333;">国学商道与楚商传承精品班</a>
				</li>
				<li>
					<span style="background: #d31515;">2</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span style="background: #d31515;">3</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>4</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>5</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>6</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>7</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>8</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>9</span>
					<a href="#">荆楚女性学堂</a>
				</li>
				<li>
					<span>10</span>
					<a href="#">荆楚女性学堂</a>
				</li>
			</ul>
		</div>
		<!-- rank-bar end -->
	</div>
	<!-- left-side-bar end -->

	<div class="content-wrap">
		<p class="location">
			<span>您现在的位置&nbsp;:</span>
			<a href=<?php echo U('/index');?>>首页</a>
			&nbsp;&nbsp;>&nbsp;&nbsp;
			<a href="">中心介绍</a>

		</p>
		<!-- location end -->
		<div class="sign-up">
			<span>招生火热进行中...</span>
			<a href="/embahust/Uploads/entryform.docx">报名表下载</a>
		</div>
		<!-- sign-up end -->
		<div class="main-content">
			<h2><?php echo ($arr["title"]); ?></h2>
			<p class="date">
				<?php echo ($arr["date"]); ?> 发布,&nbsp;
				<span><?php echo ($arr["page_view"]); ?>浏览</span>
			</p>
			<p class="artical-content"><?php echo ($arr["content"]); ?></p>
			<p class="bottom-info">华中科技大学高级研修班即将开班，期待你的加入</p>
			<p class="bottom-info">咨询电话&nbsp;:&nbsp;027-87540112</p>
			<p class="bottom-info" style="padding-bottom: 40px;">地址&nbsp;:&nbsp;华中科技大学国学研究院文化中心</p>
		</div>
		<!-- main-content end -->
	</div>
	<!-- main-content end -->
	<!--清除浮动-->
	<div style="height: 0px; clear: both;"></div>
</div>
<!-- main-body end -->