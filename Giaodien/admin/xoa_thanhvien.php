<?php 
	include ("../config.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM user WHERE id = $id";
		$query=mysqli_query($connect,$sql);
		header("Location:quanlythanhvien.php");
	}
 ?>