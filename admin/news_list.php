<?php  
$db = mysqli_connect("localhost", "root", "", "product_info");
$sql = "SELECT * FROM my_products";
$result = mysqli_query($db, $sql);				
?>

<table border="1">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>update</td>
		<td>delete</td>
	</tr>

	<?php  
	while( $r = mysqli_fetch_assoc($result) ){
	?>
		<tr>
			<td><?php echo $r['ID']; ?></td>
			<td><?php echo $r['name']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $r['ID']; ?>">
					update
				</a>
			</td>
			<td>
				<a href="action.php?action=delete&id=<?php echo $r['ID']; ?>">
					delete
				</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>