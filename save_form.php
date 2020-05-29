<?php
	$link = new mysqli("localhost", "root", "root", 'Library_db');

	if (isset($_POST['id'])) {

	 	$id = $_POST['id'];
	 	$author = $_POST['author'];
	 	$bookname = $_POST['bookname'];
	 	$abstractname = $_POST['abstractname'];
	 	$isbn = $_POST['isbn'];
	 	$review = $_POST['review'];

	 	$result = mysqli_query($link, "INSERT INTO Library_table VALUES($id, '$author', '$bookname', '$abstractname', '$isbn', '$review');");
	 }

	 header('Location: /lab6');	
 ?>