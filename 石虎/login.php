<?php header("Content-Type:text/html; charset=utf-8");?>

<?php
	include('conn.php');
	session_start();
	function check_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username))
		{
			$_SESSION['msg'] = "Username should not contain space and special characters!"; 
			header('location: enter.php');
		}
		else
		{
			
			$fusername=$username;
			
			$password = $_POST["password"];
			// $fpassword=md5($password);
			//echo $fusername,$password;

			$sql = "select * from `user` where username='$fusername' and password = '$password'";
			$query=mysqli_query($conn,$sql);

			
			//echo $ss;
			if(mysqli_num_rows($query)==0)
			{
				$_SESSION['msg'] = "登入失敗，輸入有誤!";

				header('location: enter.php');
			}
			else
			{
		
				$row=mysqli_fetch_array($query);
				
					$_SESSION['id']=$row['id'];
					$_SESSION['name']=$row['uname'];
					$_SESSION['profession']=$row['profession'];
					$_SESSION['country']=$row['country'];
					?>
					<script>
						window.alert('登入成功，歡迎!');
						window.location.href='index2.php';		
					</script>
					<?php
				
			}
		
		}
	}
?>