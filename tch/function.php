<?php
	session_start();
	$_SESSION['status']="";
	
	$_SESSION['type']=0;
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'test');
	if( isset($_POST['sbmt']) ) {
		$username = $_POST['t1'];
		$password = $_POST['t2'];
		$calue = $_POST['t3'];
		if($calue == "Teacher") {
			$sql="select * from teacher where user = '".$username."' AND password = '".$password."' limit 1";
			$result= mysqli_query($db,$sql);
			if (mysqli_num_rows($result) == 1) {
			$_SESSION['username']=$_POST["t1"];
       		$_SESSION['status']="yes";
       		$_SESSION['type'] = 1;
			header('location: tch/resources.php');	
			}
			else {
				array_push($errors, "Invalid usernanme or password!!!");
			 	echo '<script type="text/javascript"> alert("Invalid username or password");</script>';
			 	header('location: login.php');	
			 	
			 	echo "alert('dfadsfsd');";		}
			}
		else {
			$sql="select * from loginform where user = '".$username."' AND password = '".$password."' limit 1";
			$result= mysqli_query($db,$sql);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['username']=$_POST["t1"];
       			$_SESSION['status']="yes";
       			$_SESSION['type']=2;
				header('location: std/login.php');	
				// header('location: index.html');
			}
			else {
				array_push($errors, "Invalid usernanme or password!!!");

			 	alert("Invalid username or password");
			}
		}	
	}
?>