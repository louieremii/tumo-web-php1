<html>
<head>
	<title>Admin page</title>
</head>
<body>
	<form action="action.php" method="post">
		<input type="text" name="name" placeholder="Name"> <br><br>
		<textarea name="imgsrc" placeholder="Image" rows="3" cols="60"></textarea> <br><br>
		<textarea name="description" placeholder="Description" rows="5" cols="60"></textarea> <br><br>
		<textarea name="link" placeholder="Link" rows="3" cols="60"></textarea> <br><br>
		<input type="submit" name="add">
	</form>

	<?php include('news_list.php') ?>
</body>
</html>