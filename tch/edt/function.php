<?php

	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'test');
	if(!$db) {
		die("Connection failed");
		console.log("dfasda");
	}
	$target = "../../content/";
	if( isset($_POST['sbmt']) ) {
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$name = $_FILES['file123']['name'];
		// $name = "1234".substr($name,0,5)."4321";
		// echo $name;
		// print_r( $_FILES['file123']);
		$target = $target.$_FILES['file123']['name'];
		$type = $_FILES['file123']['type'];
		// echo $type;
		// $file_name1=strtolower(end(explode(".",$_FILES['file123']['name'])));
		// $data = file_get_contents($_FILES['file123']['tmp_name']) ;
		// echo $name;
		// echo $type;
		 // echo $data;	
		
		if(move_uploaded_file($_FILES['file123']['tmp_name'], $target)){
			// echo "dfasdf";
		}
	$sql="INSERT  INTO content (title , description ,  name , type) VALUES ('$title','$desc','$name' , '$type') ";
			$result= mysqli_query($db,$sql);
			// console.log($result);
			// echo $result;
		// 
		// if($calue == "Teacher") {
		//	$sql="select * from teacher where user = '".$username."' AND password = '".$password."' limit 1";
		// 	$result= mysqli_query($db,$sql);
		// 	if (mysqli_num_rows($result) == 1) {
		// 		header('location: index.html');	
		// 	}
		// 	else {
		// 		array_push($errors, "Invalid usernanme or password!!!");
		// 	// echo "alert(username or password wrong!!!)";
		// 	// 	header('location: login.php');			}
		// 	}
		// }	
		// else {
		// 	$sql="select * from loginform where user = '".$username."' AND password = '".$password."' limit 1";
		// 	$result= mysqli_query($db,$sql);
		// 	if (mysqli_num_rows($result) == 1) {
		// 		header('location: index.html');
		// 	}
		// 	else {
		// 		array_push($errors, "Invalid usernanme or password!!!");
		// 	}
		// }	
	}

?>