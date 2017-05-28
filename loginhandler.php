<?php
include("dbconnect.php");
session_start();
if(isset($_SESSION['u_id'])||isset($_SESSION['e_id'])){
    header('location:index.php');
}else{
	if(isset($_POST['loginas'])&&isset($_POST['password'])&&isset($_POST['email'])){
		$loginas=$_POST['loginas'];
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$email=mysql_escape_string($email);
		$pass=mysql_escape_string($pass);
		$pass=hash("sha256", $pass);
		if($loginas=="student"){
			$query="SELECT u_id from user WHERE email='".$email."' AND password='".$pass."';";
			$res=mysql_query($query);
			if($result=mysql_fetch_array($res)){
				$u_id=$result['u_id'];
				$_SESSION['u_id']=$u_id;
				header("location:index.php");
			}else{
		echo "invalid email or password";
	}
		}
		else if($loginas=="employer"){
$query="SELECT e_id from employer WHERE email='".$email."' AND password='".$pas."';";
			$res=mysql_query($query);
			if($result=mysql_fetch_array($res)){
				$e_id=$result['e_id'];
				$_SESSION[e_id]=$e_id;
				header("location:index.php");
			
		}else{
		echo "invalid email or password";
	}
	
	
} else{
	echo "invalid credentials entered. Please try again.";
}
}
}


?>