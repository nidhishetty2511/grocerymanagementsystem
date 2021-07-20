<?php

include "../db.php";

// $get_grocery = "SELECT category_id, category_name FROM category";
// $result = $db->query($get_grocery);



if (isset($_POST['addProduct'])) {
	$stmt = $db->prepare("INSERT INTO product (product_name, product_price, product_description,product_image, category_id, quantity, active) VALUES (?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("sissiii", $name, $price, $description, $image, $category, $quantity, $isActive);

	//file upload code
    $target_dir = "../../customer/images/";
    // $target_dir = "C:/xampp/htdocs/grocery/customer/images/";
    
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
    // echo $target_file;
    $uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
    // echo $_FILES["image"]["tmp_name"];
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if ($check !== false) {
		// echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		// echo "File is not an image.";
		$uploadOk = 0;
	}
        // echo "before file check : ".$uploadOk;

	// Check if file already exists
	if (file_exists($target_file)) {
		// echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
    // echo "after file check : ".$uploadOk;
	// Check file size
	if ($_FILES["image"]["size"] > 100) {
		//echo "Sorry, your file is too large.";
		$uploadOk = 1;
	}
    // echo "size file check : ".$uploadOk;
	// Allow certain file formats
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		// echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
    // echo "after size file check : ".$uploadOk;
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		// echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			
			// echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
		} else {
			// echo "Sorry, there was an error uploading your file.";
		}
	}



	$name = (string)$_POST['productName'];
	$price = (float)$_POST['price'];
	$quantity = (int)$_POST['quantity'];
	$description = (string)$_POST['description'];
	
	$image = (string)"images/".basename($_FILES["image"]["name"]);
	$category = (int)$_POST['category'];
	$isActive = (int)$_POST['isActive'];
	// echo $name; 
	// echo $price; 
	// echo $quantity; 
	// echo $description; 
	// echo $image; 
	// echo $category; 
	// echo $isActive; 

	// $addQuery = "INSERT INTO product (product_id, product_name, product_price, product_description,product_image, category_id, quantity, active) VALUES ( 4,'". $name ."'," . $price .",'" . $description ."','" . $image ."'," . $category ."," . $quantity ."," . $isActive . ")";
	// echo "<br> Query : " . $addQuery;    
	// $gotit = $db->query("INSERT INTO product (product_name, product_price, product_description,product_image, category_id, quantity, active) VALUES ('". $name ."'," . $price .",'" . $description ."','" . $image ."'," . $category ."," . $quantity ."," . $isActive . ")");

	// if ($gotit){
	//     echo "Yes";
	// } else {
	//     echo "No";
	// }
	$stmt->execute();
	$stmt->close();
    // $db->close();
    header("Location: http://localhost/grocery/admin/add-item.php?isAdded=1"); 
    exit;
} else {
	header("Location: http://localhost/grocery/admin/add-item.php"); 
    exit;
}

?>
