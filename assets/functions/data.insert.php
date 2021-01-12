<?php
	// Checks whether user has pressed registration button
	if (isset($_POST['register'])) {
		// Creates query to database
		$sql = '
		INSERT INTO produkter (produktnamn, produktbeskrivning, produktpris, regdate)
		VALUES (:produktnamn, :produktbeskrivning, :produktpris, NOW())
		';
		// Prepares the query
		$stmt = $dbh->prepare($sql);
		// Connects empty placeholders with variables
		$stmt->bindValue(':produktnamn', $_POST['produktnamn']);
		$stmt->bindValue(':produktbeskrivning', $_POST['produktbeskrivning']);
		$stmt->bindValue(':produktpris', $_POST['produktpris']);
		
		// Checks whether query executes successfully
		if ($stmt->execute()) {
			
			// Logs user into the system

			header('Location: ../../index.php?action=inserted');
			//echo "test".$_POST['produktnamn'];
			//echo "$_POST[produktnamn], $_POST[produktbeskrivning], $_POST[produktpris]";
			exit();
		}
		
		
	//	echo'hi';
	//		exit;
	}
?>