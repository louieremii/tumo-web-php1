<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "product_info");
$sql = "SELECT * FROM my_products WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="name">Name</label><br>
				<input type="text" name="name" id="name" value="<?php echo $r['name']; ?>"> <br><br>

				<label for="imgsrc">image</label><br>
				<textarea name="imgsrc" id="imgsrc" rows="6" cols="46" > <?php echo $r['imgsrc']; ?></textarea><br><br>

				<label for="description">Content</label><br>
				<textarea name="description" id="description" rows="10" cols="46"><?php echo $r['description']; ?></textarea><br><br>				

				<label for="link">link</label><br>
				<textarea name="link" id="link" rows="6" cols="46" > <?php echo $r['link']; ?></textarea><br><br>

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>