<?php
 if(isset($_POST['submit'])){
	$title = $_POST['title'];
    $pages = $_POST['pages'];
	$author = $_POST['author'];
	$year = $_POST['year'];
	
    $conn = new mysqli("localhost", "root", "", "library") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO `books`(`Title`, `Pages`, `Author`, `PublishedYear`) VALUES ('$title', '$pages', '$author', '$year')") or die (mysqli_error());
    $conn->close();
	echo '<script>alert("Succesfully Added!"); window.location.href="addbook.php"</script>';
 }
?>