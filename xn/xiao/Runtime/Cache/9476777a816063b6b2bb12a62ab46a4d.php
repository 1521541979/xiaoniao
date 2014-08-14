<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title>笑尿啦</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	 <div class="container">
		<ul class="nav nav-pills" role="tablist">
		  <li role="presentation" class="active"><a href="__APP__">最热</a></li>
		  <li role="presentation"><a href="#">围观</a></li>
		  <li role="presentation"><a href="#">班级</a></li>
		  <li role="presentation"><a href="#">好人</a></li>
		  <li role="presentation"><a href="#">等级</a></li>
		  <li role="presentation"><a href="#">检讨</a></li>
		  <li role="presentation"><a href="#">政教处</a></li>
		  <li role="presentation"><a href="#">小伙伴</a></li>
		  <li role="presentation"  class="dropdown">
		  	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      	登录 <span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu" role="menu">
			      <li><a href="__APP__/Index/login">登录</a></li>
			      <li><a href="__APP__/Index/register">注册</a></li>
			  </ul>
		   </li>
		</ul>
	 </div>
</nav>  
<div class="container" id="content">
	<div class="jumbotron">
	  <h1>注意</h1>
	  <p>这可能是最好玩的笑话分享平台!</p>
	  <p><a class="btn btn-primary btn-lg" role="button">瞅瞅</a></p>
	</div>
	<div class="list-group">
	  <a href="#" class="list-group-item active">
	    <h4 class="list-group-item-heading">List group item heading</h4>
	    <p class="list-group-item-text">...</p>
	  </a>
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">List group item heading</h4>
	    <p class="list-group-item-text">...</p>
	  </a>
	  <a href="#" class="list-group-item">
	    <h4 class="list-group-item-heading">List group item heading</h4>
	    <p class="list-group-item-text">...</p>
	  </a>
	</div>
</div>
<footer style="background:#eee;margin-top:30px;">
<div class="container">
	<div style="height:200px;">
		<a href="http://www.xiaoniao.la">笑尿啦</a>
	</div>
</div>

</footer>
<script src="__PUBLIC__/jquery/jquery-1.11.1.min.js"></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>