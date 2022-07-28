<?php
$id=$_REQUEST['id'];
$conn = new mysqli('localhost','root','','test');
$sql = "DELETE FROM registration WHERE id='$id'";
$result = mysqli_query($conn,$sql);
header("Location: showdata.php"); 
?>
