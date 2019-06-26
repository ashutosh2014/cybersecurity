<?php
	
if(!isset($_SESSION)) {session_start();} 
include('../connect.php');
include('p.php');
$errors = array();
$success = array();
$result = 0;
	if(isset($_SESSION)) {
		if( isset($_POST['sbmt']) ) {
			$pas1=$_POST['n1'];
			$pas2=$_POST['n2'];
			$oldpass=$_POST['old'];
			$username=$_SESSION['username'];
			$qw="select password from teacher where  user= '".$username."'";
			$res=mysqli_query($cn,$qw);
			while($data=mysqli_fetch_array($res)) {
				 $old=$data[0];
			}
			if($pas1 != $pas2) {
				array_push($errors, "Password not match!!");
			}
			elseif($old == $oldpass) {
				
				array_push($errors, "Password Updated successfully!!");
				$oldpass=$pas1;
				$sql = "UPDATE teacher SET password = '".$pas1."' WHERE user= '".$username."';";

				$result= mysqli_query($cn,$sql);
				 echo $result;
				// echo  json_encode($errors);
			}
			else {
				// echo json_encode($success);
				
				if($result!=1) { 
				echo $old;
				echo $oldpass;
				array_push($errors, "Old Password is wrong!!!");
				}
			}
		}
	}
	// session_start();
	// $_SESSION['status']="";
	// $_SESSION['type']=0;
	// $errors = array();
	// $db = mysqli_connect('localhost', 'root', '', 'test');
	// if( isset($_POST['sbmt']) ) {
	// 	$username = $_POST['t1'];
	// 	$password = $_POST['t2'];
	// 	$calue = $_POST['t3'];
	// 	if($calue == "Teacher") {
	// 		$sql="select * from teacher where user = '".$username."' AND password = '".$password."' limit 1";
	// 		$result= mysqli_query($db,$sql);
	// 		if (mysqli_num_rows($result) == 1) {
	// 		$_SESSION['username']=$_POST["t1"];
 //       		$_SESSION['status']="yes";
 //       		$_SESSION['type'] = 1;
	// 		header('location: tch/resources.php');	
	// 		}
	// 		else {
	// 			array_push($errors, "Invalid usernanme or password!!!");
	// 		 	echo '<script type="text/javascript"> alert("Invalid username or password");</script>';
	// 		 	header('location: login.php');	
			 	
	// 		 	echo "alert('dfadsfsd');";		}
	// 		}
	// 	else {
	// 		$sql="select * from loginform where user = '".$username."' AND password = '".$password."' limit 1";
	// 		$result= mysqli_query($db,$sql);
	// 		if (mysqli_num_rows($result) == 1) {
	// 			$_SESSION['username']=$_POST["t1"];
 //       			$_SESSION['status']="yes";
 //       			$_SESSION['type']=2;
	// 			header('location: std/login.php');	
	// 			// header('location: index.html');
	// 		}
	// 		else {
	// 			array_push($errors, "Invalid usernanme or password!!!");

	// 		 	alert("Invalid username or password");
	// 		}
	// 	}	
	// }
?>