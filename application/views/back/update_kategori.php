<form action="<?php echo base_url(); ?>index.php/kategori/update/<?=$p['id_produk']; ?>" method="post">

	<input type="text" name="name" placeholder="masukkan nama kategori" value="<?=$p['name'];?>"><br>

	<input type="text" name="parent" placeholder=" masukkan parent" value="<?=$p['parent'];?>"><br>
	<input type="submit" name="update" value="save">
<br>