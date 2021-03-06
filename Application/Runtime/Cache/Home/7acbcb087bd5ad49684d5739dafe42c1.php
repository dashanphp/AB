<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>江苏AB股份有限公司</title>
	<link rel="stylesheet" href="/application/Public/bootstrap/css/bootstrap.min.css"/>
	
	<link rel="stylesheet" href="/application/Public/Home/index.css">
	<script src="/application/Public/bootstrap/js/jquery.min.js"></script>
	<script src="/application/Public/bootstrap/js/bootstrap.min.js"></script>
	<style>
		*{
				font-family: 微软雅黑;
		 }
		.panel-heading{
			background: #048044;
			color: #fff;
		}

		.text{
			margin-top: 15px;
		}
	   .panel img{
	     width:100%;
	   }
	</style>
		
</head>
<body>
	 <div class="container logo">
		
		<img src="/application/Public/Home/images/logo.png" alt="" class='logo' class="img-responsive" width="100%">

	</div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#example-navbar-collapse">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/index.php">AB集团</a>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav">
				<?php if(is_array($com)): $i = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comlist): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/About/about/id/<?php echo ($comlist['id']); ?>"><?php echo ($comlist['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				<li><a href="/index.php/Home/News/news">新闻动态</a></li>
				<li class="divider"></li>
				<li><a href="/index.php/Home/Product/product">产品展示</a></li>
			</ul>
		</div>
		</div>
	</nav>	
	
	<div class="bg-img container">
		<img src="/application/Public/Home/images/bg-img.jpg" alt="" class="img-responsive">
	</div>
	<div class="container search">
		<div class="row">
			<div class="col-md-6">
				<div class="input">
					<form action="/index.php/home/search/search" method="post">
					<input type="text" placeholder="请输入搜索关键词" name="keyword" >
					<a class='glyphicon glyphicon-search' href="javascript:"></a>
					</form>
					<script>
						$('.glyphicon').click(function(){
							$('form').submit();
						})
					</script>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list">
					热门搜索：<a href="/index.php/home/about/joinus">AB内衣加盟</a> &nbsp;&nbsp; <a href="/index.php/home/product/product">AB内衣城堡</a>
				</div>
				<div class="clearfix"></div>
			</div>


		</div>	

	</div>
	 <ul class="nav nav-pills">
  		 
  		<li role="presentation" class="dropdown">
    		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      		公司概况
    		</a>
    		<ul class="dropdown-menu">
				 <li><a href="/index.php/Home/About/about/id/1">关于AB</a></li>
	     		 <li><a href="/index.php/Home/About/about/id/10">AB文化</a></li>
	     		 <li><a href="/index.php/Home/About/about/id/9">领导致辞</a></li>
	     		 <li><a href="/index.php/Home/About/about/id/8">资质荣誉</a></li>
    		</ul>
  	   </li>
  	   <li role="presentation" class="dropdown">
    		<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      		内衣城堡
    		</a>
    		<ul class="dropdown-menu">
          <?php if(is_array($pr)): $i = 0; $__LIST__ = $pr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prlist): $mod = ($i % 2 );++$i;?><li><a href="/index.php/home/product/productlist/id/<?php echo ($prlist['id']); ?>" ><?php echo ($prlist['typename']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    			
    		</ul>
  	   </li>
  	   <li >
    		<a  href="/index.php/Home/About/about/id/7" role="button">
      		联系我们
    		</a>
    		
  	   </li>
  		
	</ul>
	<div class="panel" style="border: 0;">
  		<div class="panel-heading">
  			<div class="pull-left">动态新闻</div>
  			<div class="pull-right">您现在的位置：首页&gt;&gt;详细新闻</div>
  			<div class="clearfix"></div>
  		</div>
  		<div class="panel-body">
  			<ul class="list-group">

			  <li class="list-group-item">
				<h4 style="text-align: center"><?php echo ($newsone['title']); ?></h4>
			  </li>
			  <li class="list-group-item">
				<p style="text-align: center">发表时间：<?php echo ($newsone['pubtime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;点击量：137</p>
			  </li>
			  <li class="list-group-item">
			  	<div>
					<?php echo ($newsone['content']); ?>
			  	</div>
				
			  </li>
			  
			 
			</ul>
  		</div>
	</div>

	
	
		
	<style>
		.footer a,.copyright a{
			color:#fff;
		}
   </style>
	<div class="container footer" style="text-align: center;background:#018044;color:#fff;padding:10px 10px 0 10px">
		<p><a href="/">网站首页</a> | <a href="/index.php/Home/About/about/id/1">关于我们</a> | <a href="/index.php/home/product/product">产品中心</a> | <a href="/index.php/home/news/news">新闻中心</a> | <a href="/index.php/home/about/joinus">在线留言</a>&nbsp;|&nbsp;<a href="/index.php/Home/About/about/id/7">联系我们</a>&nbsp;| <a href="http://si.trustutn.org/info?sn=192161026025108249020&amp;certType=1" target="_self"><img src="/application/Public/Home/images/renzheng.png" title="1477874494877589.png" alt="bottom_large_img.png"></a></p>
	</div>
	<div class="copyright container" style="text-align: center;background:#018044;color:#fff;padding:0 10px 10px10px;">Copyright ©http://www.chinaab.com/ 江苏AB集团股份有限公司 专业从事于<a href="http://www.chinaab.com/">AB内衣加盟</a>,<a href="http://www.chinaab.com/">品牌内衣批发</a>,<a href="http://www.chinaab.com/">AB集团内衣城堡</a>, 欢迎来电咨询!<br> <a href="http://www.miibeian.gov.cn/">苏ICP备06027269号</a>&nbsp;&nbsp;Powered by <a href="http://www.cn86.cn/">祥云平台</a>&nbsp;&nbsp;技术支持：<a href="http://www.njsem.net" target="_blank">南京缤虎信息</a>
	</div>
	
</body>
<script>
	
</script>
</html>