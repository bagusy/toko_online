
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													<a href="<?=base_url();?>produk/add" class="btn btn-success">Tambah Poduk</a>
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
														<th>name</th>
														<th>kategori</th>
														<th>sku</th>
														<th>gambar</th>
														<th>berat </th>
														<th>stok</th>
														<th>url</th>
														<th>harga beli</th>
														<th>harga jual</th>
														<th>harga diskon</th>
														<th>asal</th>
														<th>action</th>
													</thead>
													<tbody>														
														<?php foreach($produk as $p ){ ?>
														<tr>
															<td><?=$p['id_produk'];?></td>
															<td><?=$p['date'];?></td>
															<td><?=$p['name'];?></td>
															<td><?=$p['kategori'];?></td>
															<td><?=$p['sku'];?></td>
															<td><img src="<?=$p['gambar_produk'];?>" width="40px"></td>
															<td><?=$p['berat'];?></td>
															<td><?=$p['stok'];?></td>
															<td><a href="<?=$p['url_drop'];?>" target='_new' data-toggle="m-tooltip" data-placement="bottom" title="" data-original-title="<?=$p['url_drop'];?>"><i class="fa fa-link"></i></td>
															<td><?=$p['harga_drop'];?></td>
															<td><?=$p['harga'];?></td>
															<td><?=$p['harga2'];?></td>
															<td><?=$p['asal_pengiriman'];?></td>
															<td>
																<a href="produk/update/<?=$p['id_produk'];?>" class="btn btn-sm btn-outline-success">update</a> 
																<a href="produk/delete/<?=$p['id_produk'];?>" class="btn btn-sm btn-outline-danger" data-toggle="modal">delete</a>
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