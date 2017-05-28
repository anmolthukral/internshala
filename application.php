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
              		echo '<h1> Resource unavailbale for employers</h1>';
              	}
              	else if($employer==0&&$user==0){
              		echo '<h1> INVALID RESOURCE</h1>';
              
              	}else if($user==1){
       				if(!isset($_GET['why'])||!isset($_GET['internship_id'])){
       					echo "<h1> YOU DONT HAVE ACCESSS TO USE THIS PAGE. KINDLY VISIT AN APPROPRIATE INTERNSHIP";
       				}       		
       				else{
                $getresume="SELECT resume from user where u_id=".$u_id.";";
                $exec=mysql_query($getresume);
                if($exec){
                  $resume=mysql_fetch_array($exec);

                }
       					
              		$query="INSERT INTO applications(u_id,internship_id,why,resume) VALUES ('".$u_id."','".$_POST['internship_id']."','".$_POST['why']."','".$resume."');";
              		$result=mysql_query($query);
              		if($result){
              			echo '<h1>THANK YOU FOR APPLYING FOR THIS. We will connect with you soon.</h1>';
              	}else{
                  echo "invalid parameters, kindly retry.";
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
