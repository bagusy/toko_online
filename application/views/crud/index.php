index.php<!DOCTYPE html>
<html>
<head>
	<title>Halaman Crud</title>
</head>
<body>
<table>
	<tr>
		<td>ID</td>
		<td>Nama</td>
	
	</tr>
	
		<?php foreach ($content->result() as $key): ?>
			<tr>
				<td><?php echo $key->id ?></td>
				<td><?php echo $key->nama ?></td>
				
			</tr>
		<?php endforeach ?>
	
</table>
</body>
</html>