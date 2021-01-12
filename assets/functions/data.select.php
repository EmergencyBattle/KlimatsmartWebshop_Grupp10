<?php
	// Gets all information from database
	$sql = 'SELECT * FROM produkter';
	// Prepares a query
	$stmt = $dbh->prepare($sql);
	// Sends query to database
	$stmt->execute();
?>