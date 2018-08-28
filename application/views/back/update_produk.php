<!-- <?php
print_r($produk[0]);
$p=$produk[0];
?> -->

<form action="<?php echo base_url(); ?>index.php/produk/update/<?=$p['id_produk']; ?>" method="post">

	<input type="text" name="date" placeholder="masukkan tanggal" value="<?=$p['date'];?>"><br>
	<input type="text" name="name" placeholder="masukkan nama produk" value="<?=$p['name'];?>"><br>
	<input type="text" name="deskripsi" placeholder="masukkan deskripsi"  value="<?=$p['deskripsi'];?>"><br>
	<input type="text" name="kategori" placeholder="masukkan kategori"  value="<?=$p['kategori'];?>"><br>
	<input type="text" name="sku" placeholder="masukkan sku" value="<?=$p['sku'];?>"><br>
	<input type="text" name="gambar_produk" placeholder="masukkan gambar" value="<?=$p['gambar_produk'];?>"><br>
	<input type="text" name="berat" placeholder="masukkan berat" value="<?=$p['berat'];?>"><br>
	<input type="text" name="stok" placeholder="masukkan stok" value="<?=$p['stok'];?>"><br>
	<input type="link" name="url_drop" placeholder="masukkan url" value="<?=$p['url_drop'];?>"><br>
	<input type="text" name="harga_drop" placeholder="masukkan harga drop" value="<?=$p['harga_drop'];?>"><br>
	<input type="text" name="harga" placeholder="masukkan harga1" value="<?=$p['harga'];?>"><br>
	<input type="text" name="harga2" placeholder="masukkan harga 2" value="<?=$p['harga2'];?>"><br>
	<input type="text" name="asal_pengiriman" placeholder=" masukkan asal" value="<?=$p['asal_pengiriman'];?>"><br>
	<input type="submit" name="update" value="save">
<br>