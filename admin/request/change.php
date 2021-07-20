<?php
include "../db.php";

    $stmt = $db->prepare("UPDATE USERS SET STATUS = ? WHERE ID = ?");

	$stmt->bind_param("ii", $_POST['val'], $_POST['userId']);
	echo $stmt->execute();
	$stmt->close();
?>