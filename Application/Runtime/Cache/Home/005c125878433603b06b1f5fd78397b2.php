<?php if (!defined('THINK_PATH')) exit();?><div class="container logo">
		<!-- <div class="row">
			<div class="col-md-6">
		  	<img src="/application/Public/Home/images/logo.png" alt="" class='logo' class="img-responsive">
		  	</div>
		  	<div class= "col-md-6">
		  	<img src="/application/Public/Home/images/phone.png" alt="" class='phone' class="img-responsive">
		  	</div>
			
		</div> -->
		<img src="/application/Public/Home/images/logo.png" alt="" class='logo' class="img-responsive" width="100%">

	</div>
	
	<div class="container nav">
			<div class="row">
				<div class="col-md-1">
					<a href="/index.php">首页</a>
				</div>
				<?php if(is_array($com)): $i = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comlist): $mod = ($i % 2 );++$i;?><div class="col-md-1">
					<a href="/index.php/Home/Index/about/<?php echo ($comlist['id']); ?>"><?php echo ($comlist['title']); ?></a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="col-md-1">
					<a href="ceo.html">总经理简介</a>
				</div>
				<div class="col-md-1">
					<a href="news.html">新闻动态</a>
				</div>
			
				<div class="col-md-1">
					<a href="chanpin.html">产品展示</a>
				</div>
				<div class="col-md-1">
					<a href="pinpai.html">品牌诠释</a>
				</div>
				<div class="col-md-1">
					<a href="qudao.html">渠道中心</a>
				</div>
				<div class="col-md-1">
					<a href="touch.html">联系我们</a>
				</div>
			</div>
	</div>
	<div class="bg-img container">
		<img src="/application/Public/Home/images/bg-img.jpg" alt="" class="img-responsive">
	</div>
	<div class="container search">
		<div class="row">
			<div class="col-md-6">
				<div class="input">
					<input type="text" placeholder="请输入搜索关键词" >
					<span class="glyphicon glyphicon-search"></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list">
					热门搜索：<a href="joinus.html">AB内衣加盟</a> <a href="chanpin.html">品牌内衣批发</a> <a href="ladynk.html">AB内衣城堡</a>
				</div>
				<div class="clearfix"></div>
			</div>


		</div>	

	</div>