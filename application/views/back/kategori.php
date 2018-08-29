<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">


<a href="kategori/add" class="btn btn-success">Tambah kategori</a>
<table border="1" class="table">
	<thead>
		<th>id kategori</th>
		<th>name</th>
		<th>parent</th>
		<th>action</th>
	</thead>
	<tbody>
		<?php foreach($kategori as $p ){ ?>
		<tr>
			<td><?=$p['id_kategori'];?></td>
			<td><?=$p['name'];?></td>
			<td><?=$this->kategori_model->getName($p['parent']);?></td>
			<td>
				<a href="kategori/update/<?=$p['id_kategori'];?>">update</a> 
				<a href="kategori/delete/<?=$p['id_kategori'];?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<pre>
<!-- 	<?php
print_r($kategori);
	?>
 -->
</pre>

				</div>
			</div>

			<!-- end::Body -->