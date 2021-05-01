<?php
	$con = mysqli_connect("localhost", "root", "", "product_info");
	if(!$con){
		die("Could not connect to the server");
	}

	$sql = "SELECT * FROM `my_products`";
	
	$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<title>Product | Parlusin Bakery</title>
</head>
<body>
	<div class="main">
		<?php include '../Rep/header.php';?>
		<div class="content">
			<div class="cover"></div>
			<div class="content1">
				<div class="gallery">
				<?php
					$my_products = mysqli_fetch_all($query);
						foreach ($my_products as $product): ?>
							<div class='card'> 
							<img src="<?php echo $product[1];?>">
							<div class='card_description'>
							<h2><?php echo $product[2];?></h2>
							<p><?php echo $product[3];?></p>
							<a class="recipe" href="<?php echo $product[4];?>">See more>></a> 
							</div>
							</div>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
		<?php include '../Rep/footer.php';?>
	</div>
</body>
</html>
<?php myslqi_close($con); ?>