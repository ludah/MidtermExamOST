<?php

 include 'dbconnection.php';

 $title = $_POST['title'];
 $pages = $_POST['pages'];
 $author =  $_POST['author'];
 $year = $_POST['year'];

   $sql1 = "INSERT INTO `books`(`Title`, `Pages`, `Author`, `PublishedYear`) VALUES ('$title','$pages','$author','$year')";
    $result = $conn -> query($sql1);
    
   header("Location: addbook.php"); 
 
?>