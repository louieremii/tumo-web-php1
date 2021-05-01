<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<title>Contact | Parlusin Bakery</title>
</head>
<body>
	<div class="main">
		<?php include '../Rep/header.php';?>
		<div class="content">
			<div class="cover"></div>
			<div class="content1">
				<div class="form">
					<h1>Contact us!</h1>
					<form>
						<label for="name">Name:</label><br>
  						<input type="text" id="name" name="name"><br>
  						<label for="email">Email:</label><br>
  						<input type="email" id="email" name="email"><br>
  						<label for="phone">Phone:</label><br>
  						<input type="text" id="phone" name="phone"><br>
  						<label for="letter">Write us a letter:</label><br>
  						<textarea class="letter"></textarea><br>
  						<input type="submit" class="submit" name="submit" value="Send">
					</form>
				</div>
				<div class="iframe">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195168.327635253!2d44.348483028336275!3d40.153305998477684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406aa2dab8fc8b5b%3A0x3d1479ae87da526a!2sYerevan!5e0!3m2!1sen!2s!4v1606393380963!5m2!1sen!2s" width="500" height="375" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
		<?php include '../Rep/footer.php';?>
	</div>
</body>
</html>