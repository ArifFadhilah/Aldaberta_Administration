<?php
require_once 'config.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {
		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;
		
		$conn->query("INSERT INTO `file2` VALUES('', '$name[0]', '$path')") or die(mysqli_error());
		
		move_uploaded_file($file_temp, $path);
		header("location:index.php");
		
	}else{
		echo "<script>alert('Please, Choose File!')</script>";
		echo "<script>window.location='tender.php'</script>";
	}
}
?>