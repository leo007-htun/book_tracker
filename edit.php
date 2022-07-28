<?php
$conn = new mysqli('localhost','root','','test');
$id=$_REQUEST['id'];
$query = "SELECT * from registration where id='".$id."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$title =$_REQUEST['title'];
$author =$_REQUEST['author'];
$rating =$_REQUEST['rating'];
$review =$_REQUEST['review'];
$isbn =$_REQUEST['isbn'];
$sql = "UPDATE registration SET title = '$title', author = '$author', isbn = '$isbn', rating = '$rating', review = '$review' WHERE id='$id'";
mysqli_query($conn, $sql);
$status = "Record Updated Successfully. </br></br>
<a href='showdata.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="title" placeholder="Enter Title" required value="<?php echo $row['title'];?>" /></p>
<p><input type="text" name="author" placeholder="Enter Author name" required value="<?php echo $row['author'];?>" /></p>
<p><input type="text" name="isbn" placeholder="Enter ISBN" required value="<?php echo $row['isbn'];?>" /></p>
<p><input type="text" name="rating" placeholder="Enter Rating" required value="<?php echo $row['rating'];?>" /></p>
<p><input type="text" name="review" placeholder="Review" required value="<?php echo $row['review'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>