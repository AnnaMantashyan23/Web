<?php
	$conn = mysqli_connect("localhost", "root", "", "test_crud");
	$q = mysqli_query($conn, "SELECT * FROM categories");
	$categories = mysqli_fetch_all($q, MYSQLI_ASSOC);
	// echo "<pre>";
	// print_r($categories);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<th>	bltt</th>
			<th>Created At</th>
		</thead>
		<tbody>
			<?php 
				foreach ($categories as $category) {
					echo "<tr>
						<td><a href='./edit_record.php?id={$category['id']}' target= '_blank'> {$category['name']}</a> </td>
						<td>{$category['created_at']}</td>
						</tr>
					";
				}

			?>
		</tbody>
	</table>
</body>
</html>