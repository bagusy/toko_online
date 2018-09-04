<form action="<?php echo base_url(); ?>index.php/produk/action_add" method="post" accept-charset="utf-8">
	<input type="text" name="name" placeholder="masukkan">

	<input type="submit" name="save">
	<?=$this->city_model->provinceDropdown()?>
</form>