<?php
session_start();
if(isset($_SESSION['u_id'])||isset($_SESSION['e_id'])){
    header('location:index.php');
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
                    <h1 class="head-live"><?php if(isset($_GET['errmsg'])){
                        if($_GET['errmsg']="ivu"){
                            echo "There is some problem with user login. Kindly fill the form again";
                        }
                        else if($_GET['errmsg']="ive"){
                            echo "There is some problem with employee login. Kindly fill the form again.";
                        }
                    } else{
                        echo "Sign up here";
                        }

                    ?></h1>
                    <div class="row">
                        <div class="col-sm-6 center">
                            <h1 class="center">Sign up as Student</h1>
                            <form action="registeruser.php" method="post" enctype="multipart/form-data">
                            <div class="col-sm-10">
                                <label>Name</label>
                                    <div class="form-group">
                                        <input required type="text" name="name" id="name" class="form-control input-sm" placeholder="name">
                                    </div>
                                </div>
                           <div class="col-sm-10">
                                <label>College</label>
                                    <div class="form-group">
                                        <input required type="text" name="college" id="college" class="form-control input-sm" placeholder="college">

                                    </div>
                                </div>
                                <div class="col-sm-10">
                                <label>email</label>
                                    <div class="form-group">
                                        <input required type="email" name="email" id="email" class="form-control input-sm" placeholder="email">
                                    </div>
                                </div>
                           <div class="col-sm-10">
                                <label>Skills((,)comma seprated)</label>
                                    <div class="form-group">
                                        <input required type="text" name="skills" id="skills" class="form-control input-sm" placeholder="skills">
                                    </div>
                                </div>
                            <div class="col-sm-10">
                                <label>password</label>
                                    <div class="form-group">
                                        <input required type="password" name="password" id="password" class="form-control input-sm" placeholder="password">
                                    </div>
                                </div>
                            
                                   <button class="btn btn-submit" type="submit">Submit</button>                 
                           
                            </form>
                        </div>


                 <div class="col-sm-6 center">
                            <h1 class="center">Sign up as employer</h1>
                            <form action="registeremp.php" method="post">
                            <div class="col-sm-10">
                                <label>Name</label>
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control input-sm" placeholder="name">
                                    </div>
                                </div>
                           <div class="col-sm-10">
                                <label>Company</label>
                                    <div class="form-group">
                                        <input type="text" name="company" id="company" class="form-control input-sm" placeholder="company">

                                    </div>
                                </div>
                                <div class="col-sm-10">
                                <label>email</label>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="email">
                                    </div>
                                </div>
                            <div class="col-sm-10">
                                <label>password</label>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="password">
                                    </div>
                                </div>
                                           <button class="btn btn-submit" type="submit">Submit</button>                 
                           
                                            
                           
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
