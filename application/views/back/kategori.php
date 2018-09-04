
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
						<a href="kategori/delete/<?=$p['id_kategori'];?>" class="btn btn-sm btn-outline-danger" >delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>