<?php
//retieving post data from form
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
include("_connect.php");
//Add product to table
mysql_query("
INSERT INTO products
(name,description,price)
VALUES
('$name','$description','$price')
");
//Notify user
?>
product added, <a href="add2.php">click here to return</a>