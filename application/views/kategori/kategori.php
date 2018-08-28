

<h3>Daftar Kategori</h3>

<table border="1">
	<thead>
		<th>ID</th>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>

	<?php
	foreach ($kategoris as $kategori ): ?>
		<tr>
			<td><?= $kategori['id'] ?></td>
			<td><?= $kategori['nama'] ?></td>
			<td><a href="<?= base_url() ?>kategori/update/<?= $kategori['id'] ?>">Edit</td>
			<td><a href="<?= base_url() ?>kategori/delete/<?= $kategori['id'] ?>">Delete</td>
		</tr>
	<?php endforeach ?>
</table>