<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													<a href="<?=base_url();?>order/add" class="btn btn-success">Tambah Order</a>
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-section">
											<div class="m-section__content">
												<table class="table table-striped m-table">
													<thead>
														<th>id order</th>
														<th>tanggal</th>
														<th>id user</th>
														<th>id produk</th>
														<th>total produk</th>
														<th>biaya</th>
														<th>status </th>
														<th>nomor tagihan</th>
														<th>pembayaran</th>
													</thead>
													<tbody>														
														<?php foreach($order as $p ){ ?>
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

				</div>
			</div>

			<!-- end::Body -->