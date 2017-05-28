<?php
include ('dbconnect.php');
session_start();
if(isset($_SESSION['u_id'])){
    $user=1;
    $u_id=$_SESSION['u_id'];
}else{
    $user=0;
}

if(isset($_SESSION['e_id'])){
    $employer=1;
    $e_id=$_SESSION['e_id'];
}else{
    $employer=0;
}

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Internshala Task</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>	

    <div class="container">
        <div class="row">
            <div class="center col-md-4 col-md-offset-4">
              <?php
              	if($employer==1){
              		echo '<h1> Please login as a student to apply for the internship.You are logged in as an employer.</h1>';
              	}
              	else if($employer==0&&$user==0){
              		echo '<h1> Please login as a student to apply for the internship.<br/><br/><br/><a href="login.php" class="btn btn-sucess">Login</a><br/>
              		or<br/>
              		<a href="signup.php" class="btn btn-sucess">Signup</a><h1>';
              
              	}else if($user==1){
       				if(!isset($_GET['internship'])){
       					echo "<h1> YOU DONT HAVE ACCESSS TO USE THIS PAGE. KINDLY VISIT AN APPROPRIATE INTERNSHIP</h1>";
       				}       		
       				else{

       					
              		$query="SELECT title from internship WHERE internship_id='".$_GET['internship']."';";
              		$result=mysql_query($query);
              		if($result){
              			$res=mysql_fetch_array($result);
              			echo "<h1>you choose the internship</br>".$res["title"]."</h1>"
              		}
              		echo '<form method="post" action="application.php">
              		  <input type="hidden" name="internship_id" value="'.$_GET['internship'].'">

              		<label>Why your application shall be considered</label>

              		<textarea name="why"></textarea>
           <button type="submit" class="btn btn-sucess">Apply</button>   		
              		

				</form>';
              	}
              }
              ?>

                </div>
            </div>

        </div>
  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    
</body>

</html>
