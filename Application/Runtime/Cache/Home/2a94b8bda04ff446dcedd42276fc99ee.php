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
		 ul{
		 	list-style: none;
		 }
		.panel-heading{
			background: #048044;
			color: #fff;
		}
		.panel-body a{
			color:#333;
		}

		.text{
			margin-top: 15px;
		}
		.carousel-inner .carousel-caption{
			width:100%;
			bottom:0px;
			left:0px;
			
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
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<h4 class="page">
					内衣城堡
				</h4>
				<div class="fenlei">
					
					<ul class="list-group ">
						<?php if(is_array($pr)): $i = 0; $__LIST__ = $pr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prlist): $mod = ($i % 2 );++$i;?><li class="list-group-item" style="width:50%;float:left;" >
							<a href="index.php/home/product/productlist/id/<?php echo ($prlist['id']); ?>" ><?php echo ($prlist['typename']); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
						<li class="clearfix"></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<h4 class="page">
					图片新闻
				</h4>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 				 <!-- Indicators -->
				  <!-- <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>
 -->
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox" >
				  	<?php if(is_array($newspic)): $i = 0; $__LIST__ = $newspic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newspiclist): $mod = ($i % 2 );++$i;?><div class="item">
				      <a href="/index.php/home/news/newslist/id/<?php echo ($newspiclist['id']); ?>"><img src="<?php echo ($newspiclist['img']); ?>" alt="..." class="img-responsive" width="100%"></a>
				      <div class="carousel-caption" >
				        <a href="/index.php/home/news/newslist/id/<?php echo ($newspiclist['id']); ?>" ><?php echo ($newspiclist['title']); ?></a>
				      </div>
				    </div><?php endforeach; endif; else: echo "" ;endif; ?>
				   <script>
				   		$(".carousel-inner").children(":first").addClass('active');
				   </script>
				    
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:#fff;"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:#fff;"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" style="">
			<div class="col-xm-6">
				<a href="/index.php/Home/About/about/id/4"><img src="/application/Public/Home/images/pinpai.png" alt="" class="pull-left" width="50%"></a>
			</div>
			<div class="col-xm-6">
				<a href="/index.php/Home/About/about/id/8"><img src="/application/Public/Home/images/wenhua.png" alt="" class="pull-left" width="50%"></a>
			</div>
		</div>	
		<div class="row" style="" >
			<div class="col-xm-6">
				<a href="/index.php/Home/About/about/id/6"><img src="/application/Public/Home/images/qudao.png" alt="" class="pull-left" width="50%"></a>
			</div>
			<div class="col-xm-6">
				<a href="/index.php/Home/About/about/id/5"><img src="/application/Public/Home/images/zhaoshang.png" alt="" class="pull-left" width="50%"></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="about col-md-4">
				<h5>关于我们 <a href="">more</a></h5>
				<p>
					<b>江苏AB集团股份有限公司</b>秉承“追求卓越，致力健康”的理念，坚守“针织内衣”的主业，经历了10年求索创业、10年崛起创牌、10年飞跃创新，三十而立的AB集团已是一家集科研、开发、营销于一体，统织造、染整、<b>AB内衣加盟、品牌内衣批发、AB集团内衣城堡</b>、成衣一条龙的企业集团，位列中国针织行业综合实力前五强。AB品牌也是国家商务部重点培育与发展的出口品牌。集团公司旗下主要有AB、A&B、T6等品牌，在全国有80多家销售公司。</p>

				<p>
					传承文明发展，AB一如既往地迈步向前。为扩大经营规模，我们将继续面向全国各地诚招加盟商，竭诚为各位合作伙伴服务。
				</p>
			</div>
			<div class="newslist col-md-8">
				<h5>新闻中心</h5>
				<div class="col-md-3">
					<img src="/application/Public/Home/images/ab.png" alt="" class="center-block">
				</div>
				<div class="col-md-9">
					<!-- <div class="first">
						<h5><a href="newspage5.html">江苏省委书记视察AB展位</a></h5>
						<p>
							江苏省省委书记罗志军视察AB展位（品牌内衣批发，AB内衣加盟，AB集团内衣城堡）
						</p>
					</div> -->
					<?php if(is_array($newscenter)): $i = 0; $__LIST__ = $newscenter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newschirld): $mod = ($i % 2 );++$i;?><div >
						
						<p class="pull-left"><a href="/index.php/home/news/newslist/id/<?php echo ($newschirld['id']); ?>">
							<?php echo (mb_substr($newschirld['title'], 0,15,'utf-8')); ?></a></p>
						
						<p class="pull-right">
							<?php echo (mb_substr($newschirld['pubtime'], 0,10,'utf-8')); ?>
						</p>
						
						<div class="clearfix"></div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>	

		</div>
	</div>

	<div class="container frieldship">
		<h5>友情连接：</h5>
		<div class="row">
			<div class="col-md-6">
				<a href="">
					<img src="/application/Public/Home/images/abzhaoshang.jpg" alt="" class="center-block img-responsive" >
				</a>
				
			</div>
			<div class="col-md-6">
				<div>
					<a href="https://ab.tmall.com/"><img src="/application/Public/Home/images/tianmao.jpg" alt="" class="img-responsive"></a>
				</div>
				<div>
					<a href="https://ababab.jd.com/"><img src="/application/Public/Home/images/jingdong.jpg" alt="" class="img-responsive"></a>
				</div>
				
			</div>
		</div>
		<div >
			<a href="http://www.neiyichengbao.cn/index.php">
				<img src="/application/Public/Home/images/tiaozhuan.png" alt="" class="img-responsive" >
			</a>
			
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