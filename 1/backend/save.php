<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$userid=$_POST['userid'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "INSERT INTO `crud`( `userid`, `name`,`age`,`username`,`password`) 
		VALUES ('$userid','$name','$age','$username','$password')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$userid=$_POST['userid'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "UPDATE `crud` SET `userid`='$userid',`name`='$name',`age`='$age',`username`='$username',`password`='$password' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `crud` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM crud WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>