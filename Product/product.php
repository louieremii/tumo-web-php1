<?php
	$link = mysqli_connect("localhost", "root", "", "product_info");
	if(!$link){
		die("Could not connect to the server");
	}

	$sql = "SELECT * FROM my_products";
	
	$result = mysqli_query($link, $sql);
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
					<div class="card">
						<img src="../img/product/applepie.jpg">
						<div class="card_description">
						<h2>Apple pie</h2>
						<p>An apple pie is a pie in which the principal filling ingredient is apple, originated in England. It is often served with whipped cream, ice cream, or cheddar cheese. It is generally double-crusted, with pastry both above and below the filling; the upper crust may be solid or latticed.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/bananabread.jpg">
						<div class="card_description">
						<h2>Banana bread</h2>
						<p>Banana bread is a type of bread made from mashed bananas. It is often a moist, sweet, cake-like quick bread; however there are some banana bread recipes that are traditional-style raised breads.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/brownie.jpg">
						<div class="card_description">
						<h2>Brownie</h2>
						<p>A chocolate brownie or simply a brownie is a square or rectangular chocolate baked confection. Brownies come in a variety of forms and may be either fudgy or cakey, depending on their density. They may include nuts, frosting, cream cheese, chocolate chips, or other ingredients.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
				</div>
				<div class="gallery">
					<div class="card">
						<img src="../img/product/chocolatechipcookies.jpg">
						<div class="card_description">
						<h2>Chocolate chip cookies</h2>
						<p>A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient. Chocolate chip cookies originated in the United States around 1938, when Ruth Graves Wakefield chopped up a Nestlé semi-sweet chocolate bar and added the chopped chocolate to a cookie recipe.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/cinnamonrolls.jpg">
						<div class="card_description">
						<h2>Cinnamon rolls</h2>
						<p>Cinnamon roll is a sweet roll served commonly in Northern Europe and North America. In Sweden it is called kanelbulle, in Denmark it is known as kanelsnegl, in Norway it is known as Kanelbolle, Skillingsboller and Kanelsnurr, and in Finland it is known as korvapuusti.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/cupcake.jpg">
						<div class="card_description">
						<h2>Cupcake</h2>
						<p>A cupcake is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations such as fruit and candy may be applied.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
				</div>
				<div class="gallery">
					<div class="card">
						<img src="../img/product/lemonbar.jpeg">
						<div class="card_description">
						<h2>Lemon bar</h2>
						<p>This is my family’s favorite. These are super fun to make and turn out really well. These are also in low sodium. They take 1 hour and 35 minutes to make. And can make 20 squares or 40 triangles, depending on how you cut them. </p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/puffpastry.jpg">
						<div class="card_description">
						<h2>Puff pastry</h2>
						<p>Puff pastry, also known as pâte feuilletée, is a flaky light pastry made from a laminated dough composed of dough and butter or other solid fat. The butter is put inside the dough, making a paton which is repeatedly folded and rolled out before baking.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
					<div class="card">
						<img src="../img/product/scone.jpg">
						<div class="card_description">
						<h2>Scone</h2>
						<p>A scone is a baked good, usually made of wheat, or oatmeal with baking powder as a leavening agent and baked on sheet pans. A scone is often slightly sweetened and occasionally glazed with egg wash. The scone is a basic component of the cream tea.</p>
						<a class="recipe" href="../Single/single.php">See more>></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include '../Rep/footer.php';?>
	</div>
</body>
</html>