<a href="user/add" class="btn btn-success">Tambah user</a>
<table border="1" class="table">
	<thead>
		<th>id user</th>
		<th>userid</th>
		<th>password</th>
		<th>email</th>
		<th>grup</th>
		<th>action</th>
	</thead>
	<tbody>
		<?php foreach($users as $s ){ ?>
		<tr>
			<td><?=$s['id_user'];?></td>
			<td><?=$s['userid'];?></td>
			<td><?=$s['password'];?></td>
			<td><?=$s['email'];?></td>
			<td><?=$s['grup'];?></td>
			<td></td>
			<td>
				<a href="kategori/update/<?=$s['id_user'];?>">update</a> 
				<a href="kategori/delete/<?=$s['id_user'];?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>