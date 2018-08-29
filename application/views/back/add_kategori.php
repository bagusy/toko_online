
<form action="<?php echo base_url(); ?>index.php/kategori/action_add" method="post">

	<input type="text" name="name" placeholder="masukkan nama kategori"><br>
    <?=$this->kategori_model->dropdown('', 'parent');?>
	<input type="submit" value="save">
<br>