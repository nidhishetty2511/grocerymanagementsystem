<?php
include "../db.php";

$isDelete = 0;

if (isset($_POST['deleteProduct'])) {
    $delete_product_query = $db->prepare("DELETE FROM PRODUCT WHERE PRODUCT_ID = ?");
    $delete_product_query->bind_param("i", $productId);

    $productId = $_POST['productId'];

    $delete_product_query->execute();
    $delete_product_query->close();
    $isDelete = 1;
    header("Location: http://localhost/grocery/1/admin/view-item.php?isDelete=" . $isDelete); 
    exit;
}



?>