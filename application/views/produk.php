<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">


<a href="produk/add" class="btn btn-success">Tambah Poduk</a>
<table border="1" class="table">
	<thead>
		<th>id produk</th>
		<th>date</th>
		<th>name</th>
		<th>deskripsi</th>
		<th>kategori</th>
		<th>sku</th>
		<th>gambar</th>
		<th>berat </th>
		<th>stok</th>
		<th>url</th>
		<th>harga drop</th>
		<th>harga 1</th>
		<th>harga 2</th>
		<th>asal</th>
		<th>action</th>
	</thead>
	<tbody>
		<?php foreach($produk as $p ){ ?>
		<tr>
			<td><?=$p['id_produk'];?></td>
			<td><?=$p['date'];?></td>
			<td><?=$p['name'];?></td>
			<td><?=$p['deskripsi'];?></td>
			<td><?=$p['kategori'];?></td>
			<td><?=$p['sku'];?></td>
			<td><img src="<?=$p['gambar_produk'];?>" width="40px"></td>
			<td><?=$p['berat'];?></td>
			<td><?=$p['stok'];?></td>
			<td><?=$p['url_drop'];?></td>
			<td><?=$p['harga_drop'];?></td>
			<td><?=$p['harga'];?></td>
			<td><?=$p['harga2'];?></td>
			<td><?=$p['asal_pengiriman'];?></td>
			<td>
				<a href="produk/update/<?=$p['id_produk'];?>">update</a> 
				<a href="produk/delete/<?=$p['id_produk'];?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<pre>
	<?php
print_r($produk);
	?>

</pre>

				</div>
			</div>

			<!-- end::Body -->