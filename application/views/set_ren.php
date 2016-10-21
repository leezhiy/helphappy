<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>赚不停</title>
    <base href="{{host}}public/"/>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<div class="loading"><img src="images/ajax-loader.gif"/></div>
	<div data-role="page" class="touzi ren" id="renzheng">
		<header data-role="header" data-position="fixed">
			<a href="#" data-rel="back" class="ui-btn ui-icon-carat-l ui-btn-icon-left ui-nodisc-icon" data-transition="slide" data-direction="revserse">返回</a> 
			<h3>实名认证</h3>
		</header>
		<div class="ui-content" data-role="content">
			<form action="#" data-ajax="false">
				<small><font color="#ff7f50">请填写您的真实信息</font></small>
				<ul>
					<li>
						<label>真实姓名：</label>
						<input type="text" required="" placeholder="填写真实姓名"  />
					</li>
					<li>
						<label>身份证号：</label>
						<input type="text" required="" placeholder="填写合法身份证号"/>
					</li>
				</ul>
				<input type="submit" value="确认并提交" data-role="none"/>
			</form>
		</div>
		<script src="js/jquery.min.js"></script>
   		<script src="js/jquery.mobile-1.4.5.min.js"></script>
   		<script type="text/javascript">
   			$(window).load(function(){
					$(".loading").fadeOut();
				})
   		</script>
	</div>
</body>
</html>