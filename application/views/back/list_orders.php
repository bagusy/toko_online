<form>
	<div class="m-portlet">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
					</h3>
				</div>
			</div>
		</div>
		<div class="m-portlet__body">
			<div class="m-section">
				<div class="m-section__content">
					<h3>list order</h3><br>
					<table class="table table-striped m-table">
						<thead>
							<th>id orders</th>
							<th>tanggal</th>
							<th>user id</th>
							<th>produk id</th>
							<th>total produk</th>
							<th>biaya</th>
							<th>status </th>
							<th>inv num</th>
							<th>pembayaran</th>
							<th>edit</th>
						</thead>
						<tbody>														
							<?php foreach($orders as $p ){ ?>
							<tr>
								<td><?=$p['id_order'];?></td>
								<td><?=$p['date'];?></td>
								<td><?=$p['userid'];?></td>
								<td><?=$p['produkid'];?></td>
								<td><?=$p['total_produk'];?></td>
								<td><?=$p['biaya'];?></td>
								<td><?=$p['status'];?></td>
								<td><?=$p['inv_num'];?></td>
								<td><?=$p['pembayaran'];?></td>
								<td>
									<a href="order/update/<?=$p['id_order'];?>" class="btn btn-sm btn-outline-success">update</a> 
									<a href="order/delete/<?=$p['id_order'];?>" class="btn btn-sm btn-outline-danger">delete</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<!--end::Section-->
		</div>

		<!--end::Form-->
	</div>
</form>