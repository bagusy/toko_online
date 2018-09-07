 <form>
		<div class="row">
			<div class="col-md-1"></div>
				<div class="col-md-10">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<th>Invoice ID</th>
                            <th>Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
						</thead>
						<tbody>														
							<?php foreach($invoice as $i ){ ?>
							<tr>
								<td><?=$i['id_inv'];?></td>
								<td><?=$i['date_inv'];?></td>
								<td><?=$i['date_paid'];?></td>
								<td><?=$i['inv_status'];?></td>
								<td>
									<a href="invoice/detail/<?=$i['id_inv'];?>" class="btn btn-sm btn-outline-success">Detail</a> 
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1"></div>
			</div>
	
</form>