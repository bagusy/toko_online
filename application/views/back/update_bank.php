<?php

$q = $bank[0];
?>
<form action="<?php echo base_url(); ?>index.php/bank/update/<?=$p['id_bank']; ?>" method="post">

	<input type="text" name="name" placeholder="masukkan nama bank" value="<?=$p['name'];?>"><br>
    
	<input type="submit" name="update" value="save">
<br>
</form>