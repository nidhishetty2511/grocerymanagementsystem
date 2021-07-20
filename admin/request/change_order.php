<?php
include "../db.php";

    $stmt = $db->prepare("UPDATE ORDERS SET IS_CONFIRMED = ? WHERE ORDER_ID = ?");

	$stmt->bind_param("ii", $_POST['val'], $_POST['orderId']);
	echo $stmt->execute();
	$stmt->close();
?>