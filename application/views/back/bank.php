



<form>
	<div class="m-portlet">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						<a href="<?=base_url();?>bank/add" class="btn btn-success">Tambah Bank</a>
					</h3>
				</div>
			</div>
		</div>
		<div class="m-portlet__body">
			<div class="m-section">
				<div class="m-section__content">
					<table class="table table-striped m-table">
						<thead>
							<th>id</th>
							<th>tanggal</th>
							<th>name bank</th>
							<th>nama rekening</th>
							<th>nomor rekening</th>
							<th>moota bank</th>
							</thead>
						<tbody>														
							<?php foreach($bank as $p ){ ?>
							<tr>
								<td><?=$p['id_bank'];?></td>
								<td><?=$p['date'];?></td>
								<td><?=$p['bank'];?></td>
								<td><?=$p['account_name'];?></td>
								<td><?=$p['account_number'];?></td>
								<td><?=$p['moota_bank_id'];?></td>
								<td>
									<a href="bank/update/<?=$p['id_bank'];?>" class="btn btn-sm btn-outline-success">update</a> 
									<a href="bank/delete/<?=$p['id_bank'];?>" class="btn btn-sm btn-outline-danger">delete</a>
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