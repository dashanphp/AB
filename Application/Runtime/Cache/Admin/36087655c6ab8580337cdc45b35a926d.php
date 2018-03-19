<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>江苏AB股份有限公司</title>
	<link rel="stylesheet" href="/application/Public/bootstrap/css/bootstrap.min.css"/>
	
	
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
		.panel-body a{
			color:#333;
		}

		.text{
			margin-top: 15px;
		}
    </style>
</head>
<body>
	
	<div class="container ">
				<div class="row" class="top text-default">
			<h4  class="pull-left"><a href="/index.php/admin/index/index" style='color:#333;'>AB公司后台管理</a></h4>
			<div class="dropdown pull-right" >
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    管理员信息
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">管理员：<?php echo $_SESSION['username'] ?></a></li>
				    <li><a href="#">修改密码</a></li>
				    <li><a href="/index.php/admin/login/logout">退出登录</a></li>
				  </ul>
			</div>

		</div>
	
		<div class="row">
						<div class="left col-md-3 pull-left ">
				<div class="panel" style="border: 0;">
			  		<div class="panel-heading">
			  			<div >新闻管理</div>
			  			
			  		</div>
			  		<div class="panel-body">
			  			<ul class="list-group">
							  <li class="list-group-item">
								<a href="/index.php/admin/news/index">新闻列表</a>
							  </li>
							  <li class="list-group-item">
								<a href="/index.php/admin/news/add">添加新闻</a>
							  </li>
			            </ul>
			  		</div>
				</div>
				<div class="panel" style="border: 0;">
			  		<div class="panel-heading">
			  			<div >产品管理</div>
			  			
			  		</div>
			  		<div class="panel-body">
			  			<ul class="list-group">
							  <li class="list-group-item">
								<a href="/index.php/admin/product/index">产品列表</a>
							  </li>
							  <li class="list-group-item">
								<a href="/index.php/admin/product/add">添加产品</a>
							  </li>
			            </ul>
			  		</div>
				</div>
				<div class="panel" style="border: 0;">
			  		<div class="panel-heading">
			  			<div >公司简介</div>
			  			
			  		</div>
			  		<div class="panel-body">
			  			<ul class="list-group">
							  <li class="list-group-item">
								<a href="/index.php/admin/company/index">简介列表</a>
							  </li>
							  <li class="list-group-item">
								<a href="/index.php/admin/company/add">添加简介</a>
							  </li>
			            </ul>
			  		</div>
				</div>
			</div>
			<div class="right col-md-9 pull-left">
				<div class="panel">
					<div class="panel panel-heading">
						您现在的位置：新闻管理
					</div>
					<div class="panel panel-body">
						<table class="table table-striped">
							
								<tr>
									<th>标题</th>
									<th>时间</th>
									<th>修改</th>
									<th>删除</th>
								</th>
								<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newslist): $mod = ($i % 2 );++$i;?><tr>
							    	
							    	<td><?php echo ($newslist['title']); ?></td>
							    	<td><?php echo ($newslist['pubtime']); ?></td>
							    	<td><a href="updatefm/id/<?php echo ($newslist['id']); ?>" class="btn btn-primary btn-sm" style="color:#fff;">修改</a></td>
							    	<td><a href="delete/id/<?php echo ($newslist['id']); ?>" class="btn btn-danger btn-sm" style="color:#fff;">删除</a></td>
							    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	
</script>
</html>