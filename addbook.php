<?php
   require('dbconnection.php');
?>
<html>

<head>
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">
</head>

<body>
	<form action="addbook.php" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" name="title" required/><br />
		<label>Pages:</label> <input type="number" min=1 name="pages" required/><br />
		<label>Author:</label> <input type="text" name="author" required/><br />
		<label>Published Year:</label> <input type="text" name="year" required/>
        <div><br/></div>
    <input style="float:right" type="submit" value="Add Book" onClick="return submit_form();" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "library") or die(mysqli_error());
                $query = $conn->query("SELECT * FROM `books` ORDER BY `BookID`") or die (mysqli_error());
               while($fetch = $query->fetch_array()){
                $title = $fetch['Title'];
                $pages = $fetch['Pages'];
                $author = $fetch['Author'];
                $year = $fetch['PublishedYear'];



                echo "<tr>
                                                <td>$title</td>
                                                <td>$pages</td>
												<td>$author</td>
												<td>$year</td>";
               }
                                                        ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>
<?php 
    $conn->close();
?>
</body>
</html>