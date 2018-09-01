
					
					<form class="form-group m-form__group row" action="<?php echo base_url(); ?>index.php/produk/action_add" method="post">

						<div class="col-lg-6">
							<input type="text" name="name" class="form-control m-input" placeholder="masukkan nama produk">
						</div>
						<div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php
                                    echo $this->kategori_model->dropdown();
                                    ?>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?=base_url();?>kategori/add" class="btn btn-sm btn-outline-success">tambah kategori</a>
                                </div>

                            </div>
						</div>
						<div class="col-lg-6">
							<input type="text" name="sku" class="form-control m-input" placeholder="masukkan sku">
						</div>
						<div class="col-lg-6">
							<input type="text" name="gambar_produk" class="form-control m-input" placeholder="masukkan gambar">
						</div>
						<div class="col-lg-6">
							<input type="text" name="berat" class="form-control m-input" placeholder="masukkan berat">
						</div>
						<div class="col-lg-6">
							<input type="text" name="stok" class="form-control m-input" placeholder="masukkan stok">
						</div>
						<div class="col-lg-6">
							<input type="link" name="url_drop" class="form-control m-input" placeholder="masukkan url">
						</div>
						<div class="col-lg-6">
							<input type="text" name="harga_drop" class="form-control m-input" placeholder="masukkan harga drop">
						</div>
						<div class="col-lg-6">
							<input type="text" name="harga" class="form-control m-input" placeholder="masukkan harga1">
						</div>
						<div class="col-lg-6">
							<input type="text" name="harga2" class="form-control m-input" placeholder="masukkan harga 2">
						</div>
						<div class="col-lg-6">
							<input type="text" name="asal_pengiriman" class="form-control m-input" placeholder=" masukkan asal">
						</div>
						<div class="col-lg-6">
							<input type="submit" value="save" class="btn btn-success"><br>
						</div>
					</form>

				