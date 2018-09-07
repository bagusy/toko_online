 <form>
	
		<div class="row">
			<div class="col-md-1"></div>
				<div class="col-md-10">

					<table class="table table-striped table-bordered table-hover">
						<thead>
							<th>ID Order</th>
                            <th>Tanggal</th>
                            <th>Consumer</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
						</thead>
						<tbody>														
							<?php foreach($orders as $p ) : 
							$totals = $p['biaya'] * $p['total_produk'];
							?>
							

							<tr>
								<td><?=$p['id_order'];?></td>
								<td><?=$p['date'];?></td>
								<td><?=$p['userid'];?></td>
								<td><?=$p['biaya'];?></td>
								<td><?=$p['total_produk'];?></td>
								<td><?=$totals?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1"></div>
			</div>
	
</form>