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
echo $_SESSION['e_id'];
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
                <a class="navbar-brand page-scroll" href="#">Internshala Task By ANMOL THUKRAL</a>
            </div>

 <div class="collapse navbar-collapse navbar-ex1-collapse ">
                <ul class="nav navbar-nav pull-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <?php
                        if($user==1){

                            echo'<li>
                        <a class="page-scroll" href="editresume.php">Edit Resume</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="logout.php">logout</a>
                    </li>
                   
  ';
                        }

                        else if($employer==1){

                            echo'<li>
                        <a class="page-scroll" href="addinternship.php">Internship Management</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="logout.php">logout</a>
                    </li>
                   
  ';

                        }
                        else{
                        echo '<li>
                        <a class="page-scroll" href="login.php">Login</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="signup.php">sign up</a>
                    </li>
                   
  ';        
                        }

                    ?>
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
                    <h1 class="head-live">INTERNSHALA</h1>
                    <div class="row">
                        <?php if(isset($_GET['msg'])&&($_GET['msg']='rupd')){
                            echo "<h1> Thanks. You can start your search now</h1>";
                        }

                        ?>
                        <div class="col-sm-12 pull-left">
                            <h1 class="center">LOOKING FOR AN INTERNSHIP?</h1>
                            <h2>You are at the right place</h2>
                            <br/><br/><br/><br/>
                            <h1 class="center"> Search here</h1>
                            <form method="post" action="search.php">
                                    <input type="text" class="form-control" id="search" name="search" placeholder="start typing your skills">
                                    <button class="btn btn-blue" type="submit"><i class="glyphicon glyphicon-zoom-in" aria-hidden="true"></i></button>

                            </form>
                        </div>

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
