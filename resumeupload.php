<?php
session_start();
if(isset($_SESSION['u_id'])){
if(isset($_FILES['resume'])){
	$resume=$_FILES['resume'];
	echo $_FILES['resume']['name'];
	$name=$_SESSION['u_id'].$_FILES['resume']['name'];
	$location="resume/".$name;
	move_uploaded_file($_FILES['resume']['tmp_name'],$location);
	echo $location."<br/>";
	$select="Select * from user where u_id='".$_SESSION['u_id']."';";
echo "<br/><br/><br/>".$select."<br/><br/>";
	$res=mysql_query($select);

	$rest=mysql_fetch_array($res);
	echo $rest;
	$query='UPDATE user SET resume="'.$location.'" where u_id='.$_SESSION['u_id'].' LIMIT 1;';
	echo $query;
	$result=mysql_query($query);
	if($result){
	echo "success";
	
	}
	else{
		echo "some problem";
	}
	
}

}else{
	echo "invalid access area.";
}

?>