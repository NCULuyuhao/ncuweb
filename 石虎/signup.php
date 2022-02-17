<!DOCTYPE html>
<html>
<head>
	<title>聊天室</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:400px;
		height:500px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> 註冊帳號</center></h2>
		<hr>
		<form method="POST" action="register.php">
		姓名: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		帳號: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		密碼: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		學校: <input type="text" name="school" class="form-control" required>
		<div style="height: 10px;"></div>
		國家: <select name="country">
			<option>請選擇</option>
			<option value="1">國家1</option>
			<option value="2">國家2</option>
			<option value="3">國家3</option>
			<option value="4">國家4</option>
			<option value="5">國家5</option>
			<option value="6">國家6</option>
			<option value="7">國家7</option>
			<option value="8">國家8</option>
			<option value="9">國家9</option>
			<option value="10">國家10</option>
		</select>
		<div style="height: 10px;"></div>
		職業: <select name="profession">
			<option>請選擇</option>
			<option value="government">政府</option>
			<option value="conservation">保育團體</option>
			<option value="business">建商</option>
		</select>
		<div style="height: 20px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>註冊</button> <a href="enter.php">回到登入</a>
		</form>
		<div style="height: 30px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>