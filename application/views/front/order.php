<!-- begin::Body -->
			
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
					<form class="form-group m-form__group row" action="<?php echo base_url(); ?>order/action_add" method="post">
						<div class="col-lg-12 text-center">
             
                <img src="<?=base_url();?>assets/image/logo1.png"  alt="icon" class="img-fluid img-thumbnail" />
				
              <h2>
							PENGIRIMAN
						  </h2>
						</div>

					</form>

					<div class="row">
						
        <div class="col-md-5 order-md-2">
              <div class="card">
                   <div class="card-header font-weight-bold bg-white"><i class="fa fa-shopping-bag"></i> Pilih Item</div>
                   <div class="card-body">
                        <div class="text-center text-sm-left">
                             <h3>Korset Penyangga Punggung</h3>
                                                     
                             <p class="h6 mt-2 text-success"><i class="fa fa-tags"></i> Special Discount</p>
                                      
                        </div>
                        <div class="row mt-3">
                             <div class="col-md-12">
                                  <table class="table">
                                      <thead>
                                          <tr>
                                              <th class="border-top-0 pl-0" colspan="2" width="78%">Warna / Ukuran</th>
                                              <th class="border-top-0 pr-0">
                                                  <span class="d-none d-sm-inline">Jumlah</span>
                                                  <span class="d-inline d-sm-none">Jml</span>
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                              <tr>
                                              <td class="align-middle text-center p-0" width="40"><img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/10/17/1105421/1105421_834211d5-3fe3-478d-b90c-9e49608de442_700_700.jpg" class="img-fluid" style="max-height:44px"></td>
                                              <td class="align-middle">
                                                  Random / S<br>
                                                  <small class="text-muted"><del>Rp. 330,000</del></small><br>Rp. 165,000 <i class="fa fa-check text-success"></i>                                              </td>
                                              <td class="align-middle text-center">
                                                  <div class="ckgroup form-inlinex">
                                                       <select class="ck-qty mr-1 border-0 text-center" style="width:40px" id="qty">
                                                         <option>1</option>
                                                         <option>2</option>
                                                         <option>3</option>
                                                         <option>4</option>
                                                         <option>5</option>
                                                         <option>6</option>
                                                         <option>7</option>
                                                         <option>8</option>
                                                         <option>9</option>
                                                         <option>10</option>
                                                       </select>
                                                       
                                                  </div>
                                              </td>
                                          </tr>
                                          
                                        </tbody>
                                  </table>
                             </div>
                        </div>
                   </div>
              </div>
        </div>
        <div class="col-md-7 order-md-1">
              <div class="card">
                   <div class="card-header font-weight-bold bg-white"><i class="fa fa-user"></i> Informasi Pemesan</div>
                   <div class="card-body">
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama lengkap <span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                              <input name="fullname" class="form-control sycn" data-sycn="name" placeholder="Mohon tulis nama lengkap" required="" type="text">
                          </div>
                       </div>
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Telpon/Whatsapp <span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                              <input name="phone" class="form-control sycn" data-sycn="phone" placeholder="Wajib diisi. Nomor telpon / WhatsApp" required="" type="text">
                          </div>
                       </div>
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat Email</label>
                          <div class="col-sm-9">
                               <input name="email" class="form-control" placeholder="Tidak wajib diisi" type="email">
                          </div>
                       </div>
                   </div>
              </div>

            <div class="card">
                <div class="card-header font-weight-bold bg-white"><i class="fa fa-map-marker"></i> Alamat Pengiriman</div>
                <div class="card-body">

                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Provinsi <span class="text-danger">*</span>
                          </label>
                          <div class="col-sm-9">
                               
                                   <?php
                                    echo $this->city_model->provinceDropdown();
                                   ?>
 
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kabupaten <span class="text-danger">*
                          </span></label>
                      
                          <div class="col-sm-9 city">
                               <select name="city_id" data-section="city_id" class="custom-select"></select>
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kecamatan <span class="text-danger">*</span></label>
                          <div class="col-sm-9 subdistrict">
                               <select id="idd" name="subdistrict_id" data-section="subdistrict" class="custom-select"></select>
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kelurahan / Desa <span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                               <input name="address2" class="form-control" required="" type="text">
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat<span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                               <input name="address1" class="form-control" required="" type="text">
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kode pos</label>
                          <div class="col-sm-9">
                               <input name="poscode" class="form-control" placeholder="harus diisi" type="text">
                          </div>
                     </div>
                     <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Catatan</label>
                          <div class="col-sm-9">
                               <textarea name="notes" class="form-control" placeholder="Tulis catatan di sini (Jika Ada)"></textarea>
                          </div>
                     </div>

                </div>
            </div>
            
            <div id="summary"></div>
            
            <div class="card mb-5">
                <div class="card-header font-weight-bold bg-white"><i class="fa fa-credit-card"></i> Metode Pembayaran</div>
                <div class="card-body">
                  
                     <label>Silahkan pilih salah satu rekening kami di bawah ini:</label>
                     <?=$this->bank_model->bankDropdown('bank');?>
                  
                </div>
                <div class="card-footer bg-white">
                     <button type="submit" name="save" class="btn btn-primary">Submit Order</button>
                </div>
            </div>
        </div>    	
					</div>                              
				</div>
			</div>

<!-- end::Body-->

