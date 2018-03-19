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
		 .container{
		 	margin-top:60px;
		 	width:60%;
		 }
		.panel-body{
			padding:30px;
		}
    </style>
</head>
<body>
	
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<h3 class="page-title">欢迎登录</h3>
			</div>
			<div class="panel panel-body">
					<form action="checkform" class="frm" method="post">
					<div class="form-group">
						<label for="">用户名:</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="">密码:</label>
						<input type="password" class="form-control" name="password">
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary">登录</button>
						<button class="btn btn-danger">重置</button>
					</div>
				   </form>
			</div>
		</div>
	</div>
</body>
<script>
	
</script>
</html>