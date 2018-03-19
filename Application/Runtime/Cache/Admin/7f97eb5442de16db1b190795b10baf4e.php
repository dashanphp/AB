<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>江苏AB股份有限公司</title>
	<link rel="stylesheet" href="/application/Public/bootstrap/css/bootstrap.min.css"/>
	
	
	<script src="/application/Public/bootstrap/js/jquery.min.js"></script>
	<script src="/application/Public/bootstrap/js/bootstrap.min.js"></script>
	<!-- ueditor编辑器 -->
 	
   
	<link rel="stylesheet" href="/application/Public/kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="/application/Public/kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="/application/Public/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="/application/Public/kindeditor/lang/zh-CN.js"></script>
	<script charset="utf-8" src="/application/Public/kindeditor/plugins/code/prettify.js"></script>
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
						您现在的位置：修改产品
					</div>
					<div class="panel panel-body">
						
						<form action="/index.php/admin/product/update" class="frm" method="post" name="content" enctype="multipart/form-data">

							<div class="form-group">
								<label for="">产品标题:</label>
								<input type="text" name="title" id="" class="form-control" value="<?php echo ($new[0]['title']); ?>">
							</div>
							<div class="form-group">
								<label for="">产品分类:</label>
								
								<select name="tid" id=""  class="form-control">
								<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i; if($new[0]['tid'] == $list['id']): ?><option value="<?php echo ($list['id']); ?>"  selected="selected"><?php echo ($list['typename']); ?></option>
									<?php else: ?>
									<option value="<?php echo ($list['id']); ?>"><?php echo ($list['typename']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
								</select>
							</div>
							<div class="form-group">
								<label for="">产品详情:</label>
								<textarea  name="content" id="content" class="form-control"><?php echo ($new[0]['content']); ?></textarea>
							</div>
							
							<input type="hidden"  name='id' value="<?php echo $_GET['id']?>">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">修改</button>
								<button type="reset" class="btn btn-danger">重置</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>	
		KindEditor.ready(function(K) {
			var editor1 = K.create('#content', {
				cssPath : '/application/Public/kindeditor/plugins/code/prettify.css',
				uploadJson : '/application/Public/kindeditor/php/upload_json.php',
				fileManagerJson : '/application/Public/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				height : "500px",
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=content]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=content]')[0].submit();
					});
				}
			});


			prettyPrint();
		});
		
	</script>
</html>