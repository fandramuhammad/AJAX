<?php
	$connection = new mysqli("localhost","root","","fann");
	if(!$connection)
	{
		echo "Connection Error!";
		exit();
	}
?>