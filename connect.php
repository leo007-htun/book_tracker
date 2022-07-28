<?php
	$title = $_POST['title'];
	$author = $_POST['author'];
	$rating = $_POST['rating'];
	$review = $_POST['review'];
	$isbn = $_POST['isbn'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(title, author, rating, review, isbn) values(?, ?, ?, ?,?)");
		$stmt->bind_param("sssss", $title, $author, $rating, $review, $isbn);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration success... redirecting to main page...";
		$stmt->close();
		$conn->close();
		header( "refresh:2; url=index.html" );
	}
?>
