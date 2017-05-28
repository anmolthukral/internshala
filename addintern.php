<?php

include ('dbconnect.php');
session_start();


if(isset($_SESSION['e_id'])){
    $employer=1;
    $e_id=$_SESSION['e_id'];
    header("location:index.php");
    if (isset($_POST['title'])&&isset($_POST['desc'])isset($_POST['req'])isset($_POST['tags'])) {
  		$title=$_POST['title'];
  		$desc=$_POST['desc'];
  		$req=$_POST['req'];
  		$tags=$_POST['tags'];
      $getcomp="SELECT company from employer where e_id=".$e_id.";";
      $result=mysql_query($query);
      if($result){
        $res=mysql_fetch_array($result);
        $company=$res['company'];      }

  		$query="INSERT INTO internship(title,description,requirments,tags,company) VALUES('".$title."','".$desc."','".$req."','".$tags."','".$company."');";
   		$res=mysql_query($query);
   		if($res){
   			$internship_ok=1;
   		}
   		else{
   		$internship_ok=0;	
   		}
    }


}else{
    $employer=0;
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


<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php   
                        	if($internship_ok==1){
                        		echo "Internship added succesfully.";
                        	}
                        	else{
                        		echo "There is some problem adding the internship";
                        	}

                        ?></h3>
                    </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.php" class="btn btn-lg btn-success btn-block">Go Back Home</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
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


