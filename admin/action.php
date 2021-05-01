<?php  
if( isset($_POST['add']) ){
	$name = $_POST['name'];
	$imgsrc = $_POST['imgsrc'];
	$description = $_POST['description'];
	$link = $_POST['link'];

	$con = mysqli_connect('localhost', 'root', '', 'product_info');

	$sql = "INSERT INTO `my_products`( `name`, `imgsrc`, `description`, `link`) VALUES ('$name','$imgsrc','$description','$link')";

	$result = mysqli_query($con, $sql);

	if($result){
		echo "Product Added";
	}
	else{
		echo "db error";
	}

	mysqli_close($con);


}

if( isset($_POST["update"]) ){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$imgsrc = $_POST['imgsrc'];	
	$description = $_POST['description'];
	$link = $_POST['link'];
	

	$con = mysqli_connect("localhost", "root", "", "product_info");

	$sql = "UPDATE `my_products` SET `name`='$name',`imgsrc`='$imgsrc',`description`='$description', `link`='link' WHERE id = $id";
	$r = mysqli_query($con, $sql);

	if($r){
		echo "Product Updated";
	}
	else{
		echo "db error";
	}

	mysqli_close($con);

}


if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$con = mysqli_connect("localhost", "root", "", "product_info");

	$sql = "DELETE FROM my_products WHERE id = $id";

	$r = mysqli_query($con, $sql);

	if($r){
		echo "Product Deleted";
	}
	else{
		echo "db error";
	}
	mysqli_close($con);
}

?>