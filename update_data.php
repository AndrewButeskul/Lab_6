<?php	
	$link = new mysqli("localhost", "root", "root", 'Library_db');


	if (isset($_POST['id'])) {

	 	$id = $_POST['id'];
	 	$author = $_POST['author'];
	 	$bookname = $_POST['bookname'];
	 	$abstractname = $_POST['abstractname'];
	 	$isbn = $_POST['isbn'];
	 	$review = $_POST['review'];

	 	$result = mysqli_query($link, "UPDATE Library_table SET author='$author', bookname='$bookname',	absctractname='$abstractname', ISBN='$isbn', review='$review' WHERE id=$id;"); 	
	 }
 ?>
