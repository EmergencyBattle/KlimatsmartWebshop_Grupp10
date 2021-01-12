<?php
	// Checks whether ID is available as GET
	if (isset($_GET['id'])) {
		// Get specific post from database
		$sql= 'SELECT * FROM produkter WHERE id = :id';
		// Prepares a query
		$stmt = $dbh->prepare($sql);
		// Connects form fields with db containers
		$stmt->bindValue(':id', $_GET['id']);
		// Sends query to database
		$stmt->execute();
		// Adds all information about student to variable
		$row = $stmt->fetch();
	}
?>