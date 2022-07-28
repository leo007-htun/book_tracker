<!DOCTYPE html>
<html>
<body>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Title</strong></th>
<th><strong>Author</strong></th>
<th><strong>Rating</strong></th>
<th><strong>Review</strong></th>
<th><strong>ISBN</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, author, rating, review, isbn FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        /*echo "<br> ID : ". $row["id"]. " |BookTitle : ".$row["title"]. " |Author : " . $row["author"]. " |Rating : " . $row["rating"]. " |Review : " . $row["review"]. " |ISBN : " . $row["isbn"]. "<br>";
    
    }
} else {
    echo "0 results";
}

$conn->close();
?>*/
?>
<tr><!--td align="center"><!?php echo $count; ?></td-->
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["title"]; ?></td>
<td align="center"><?php echo $row["author"]; ?></td>
<td align="center"><?php echo $row["rating"]; ?></td>
<td align="center"><?php echo $row["review"]; ?></td>
<td align="center"><?php echo $row["isbn"]; ?></td>
<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php  } 
} else {
    echo "0 results";
}

$conn->close();
?>

</tbody>
</table>
</div>

</body>
</html>

<!--?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Title</strong></th>
<th><strong>Author</strong></th>
<th><strong>Rating</strong></th>
<th><strong>Review</strong></th>
<th><strong>ISBN</strong></th>
<th><strong>Edit</strong></th>
</tr>
</thead>
<tbody>
<!?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><!?php echo $count; ?></td>
<td align="center"><!?php echo $row["id"]; ?></td>
<td align="center"><!?php echo $row["title"]; ?></td>
<td align="center"><!?php echo $row["author"]; ?></td>
<td align="center"><!?php echo $row["rating"]; ?></td>
<td align="center"><!?php echo $row["review"]; ?></td>
<td align="center"><!?php echo $row["isbn"]; ?></td>
<td align="center">
<a href="edit.php?id=<!?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
</tr>
<!?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html-->