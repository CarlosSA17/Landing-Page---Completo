<?php
$conn = new mysqli("localhost","root","carlos172413","loginvaidroll5");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>