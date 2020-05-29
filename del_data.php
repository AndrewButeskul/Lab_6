<?php 
	$link = new mysqli("localhost", "root", "root", 'Library_db');

	$result = mysqli_query($link, "DELETE FROM Library_table;");
	echo "Все данные успешно удалены.";
	header('Location: /lab6');	

 ?>