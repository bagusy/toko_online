<?php

$p = $kategori[0];
?>
<form action="<?php echo base_url(); ?>index.php/kategori/update/<?=$p['id_kategori']; ?>" method="post">

	<input type="text" name="name" placeholder="masukkan nama kategori" value="<?=$p['name'];?>"><br>
    <?=$this->kategori_model->dropdown($p['parent'], 'parent');?>
	<input type="submit" name="update" value="save">
<br>
</form>