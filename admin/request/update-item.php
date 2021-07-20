<?php
// include "../../admin/db.php";
include "../db.php";

// $get_grocery = "SELECT category_id, category_name FROM category";
// $result = $db->query($get_grocery);



if (isset($_POST['UpdateProduct'])) {
	$stmt = $db->prepare("UPDATE product SET product_name = ?, product_price = ?, product_description = ?,category_id = ?, quantity = ?, active = ? WHERE PRODUCT_ID = ?");

	$stmt->bind_param("sisiiii", $name, $price, $description,$category, $quantity, $isActive, $productId);

    $productId = (int)$_POST['product'];
	$name = (string)$_POST['productName'];
	$name = (string)$_POST['productName'];
	$price = (float)$_POST['price'];
	$quantity = (int)$_POST['quantity'];
	$description = (string)$_POST['description'];

	$category = (int)$_POST['category'];
	$isActive = (int)$_POST['isActive'];
	
	$stmt->execute();
	$stmt->close();
    // $db->close();
    header("Location: http://localhost/grocery/1/admin/view-item.php?isUpdate=1"); 
    exit;
} else {
    header("Location: http://localhost/grocery/1/admin/view-item.php"); 
    exit;
}

?>
