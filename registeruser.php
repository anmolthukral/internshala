
<?php
include("dbconnect.php");
session_start();

if(isset($_POST['name'])&&isset($_POST['college'])&&isset($_POST['skills'])&&isset($_POST['email'])&&isset($_POST['password'])){
	$name=$_POST['name'];
	$college=$_POST['college'];
	$skills=$_POST['skills'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$name=mysql_escape_string($name);
	$college=mysql_escape_string($college);
	$skills=mysql_escape_string($skills);
	$email=mysql_escape_string($email);
	$password=mysql_escape_string($password);
	$password=hash('sha256', $password);

	$insertquery="INSERT INTO user(name,college,skills,email,password) VAlUES('".$name."','".$college."','".$skills."','".$email."','".$password."');";
	echo $insertquery."<br/>";

    $res=mysql_query($insertquery);
    if($res){
		$set_upload=1;
		$query="SELECT u_id FROM user WHERE email='".$email."';";
		echo $query;
        $result=mysql_query($query);
		if($user=mysql_fetch_array($result)){
			$uid=$user['u_id'];
			$_SESSION['u_id']=$uid;
            $set_upload=1;
		}

	}

	else if(isset($_GET['msg'])&&isset($_SESSION['u_id'])){

		if($_GET['msg']=updres){
			$set_upload=1;
		}
	}
	else{
		$set_upload=0;
	}

}else{
	header("location:signup.php?errmsg=ivu");
}


?>

<!DOCTYPE html>
<html lang="en">

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

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Internshala Task By ANMOL THUKRAL</a>
            </div>

 <div class="collapse navbar-collapse navbar-ex1-collapse ">
                <ul class="nav navbar-nav pull-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.php">Login</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="signup.php">sign up</a>
                    </li>
                   
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1> Resume Uploading</h1>
                    <h1 class="head-live"><?php if($set_upload==1){
                        echo '<form action="resumeupload.php" method="post" enctype="multipart/form-data"><div class="col-sm-10">
                                <label>Upload your resume</label>
                                    <div class="form-group">
                                        <input required type="file" name="resume" id="resume" class="form-control input-sm" placeholder="upload your resume">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-submit">Upload</button>
                                </form>
                            ';


                        }else{
                        	echo '<h1>RESUME UPLOADING FAILED. </h1>';
                        }

                    ?></h1>
                   
                       


                    </div>
                   
                </div>
            </div>
        </div>
    </section>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
