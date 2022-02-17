<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			header("Content-Type: text/html;charset=utf-8"); 
			$_SESSION['sign_msg'] = "Username should not contain space and special characters!"; 
			header('location: signup.php');
		}
		else{
			header("Content-Type: text/html;charset=utf-8"); 
			$fusername=$username;
			
			$password = check_input($_POST["password"]);
			// $fpassword=md5($password);
			$fname = check_input($_POST["name"]);
			$fschool =$_POST['school'];
			$fcountry = $_POST['country'];
			$fprofession = $_POST['profession'];

			$sql = "insert into `user` (uname,username,password,school,country,profession) values ('$fname','$fusername','$password','$fschool','$fcountry','$fprofession')";
			print_r($sql);
			mysqli_query($conn,$sql);
			mysqli_set_charset($conn,"utf8");
		
			$_SESSION['msg'] = "註冊成功，您可以登入!"; 

		header('location: enter.php');
		}
	}
?>