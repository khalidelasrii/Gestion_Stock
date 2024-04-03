<?php 

$link = mysqli_connect('localhost', 'root', '');
	if (!$link) 
	{
	    die('Could not connect: ' . mysqli_error($link));
	}
	mysqli_select_db($link,'gestion_stock');


 ?>