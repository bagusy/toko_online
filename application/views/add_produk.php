<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
<form action="<?php echo base_url(); ?>index.php/produk/action_add" method="post">

	<!-- <input type="date" name="date" placeholder="masukkan tanggal"><br> -->
	<input type="text" name="name" placeholder="masukkan nama produk"><br>
	<input type="text" name="deskripsi" placeholder="masukkan deskripsi"><br>
	<?php
	echo $this->kategori_model->dropdown();
	?><br>
	<input type="text" name="sku" placeholder="masukkan sku"><br>
	<input type="text" name="gambar_produk" placeholder="masukkan gambar"><br>
	<input type="text" name="berat" placeholder="masukkan berat"><br>
	<input type="text" name="stok" placeholder="masukkan stok"><br>
	<input type="link" name="url_drop" placeholder="masukkan url"><br>
	<input type="text" name="harga_drop" placeholder="masukkan harga drop"><br>
	<input type="text" name="harga" placeholder="masukkan harga1"><br>
	<input type="text" name="harga2" placeholder="masukkan harga 2"><br>
	<input type="text" name="asal_pengiriman" placeholder=" masukkan asal"><br>
	<input type="submit" value="save">
<br>

				</div>
			</div>

			<!-- end::Body -->