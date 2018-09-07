<form action="" method="post">
              <div class="card">
                   <div class="card-header font-weight-bold bg-white"><i class="fa fa-user"></i> setting</div>
                   <div class="card-body">
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Site Title <span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                              <input name="site_title" class="form-control" type="text" value="<?=$site_title;?>">
                          </div>
                       </div>
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tag Line<span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                              <input name="tag_line" class="form-control" type="text" value="<?=$tag_line;?>">
                          </div>
                       </div>
                       <div class="form-group row">
                          <label class="col-sm-3 col-form-label">web address</label>
                          <div class="col-sm-9">
                               <input name="web_address" class="form-control" type="text" value="<?=$web_address;?>"> 
                          </div>
                       </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">domain<span class="text-danger">*</span></label>
                          <div class="col-sm-9">
                              <input name="domain" class="form-control"type="text" value="<?=$domain;?>">
                          </div>
                       </div>


                       	 <div class="form-group row">
							<tr>
							<th scope="row">
							<label class="col-sm-3 col-form-label" for="default_role" >New User Default Role<span class="text-danger">*</span></label></th>
							  <div class="col-sm-9">
							<td>
							<select name="default_role" id="default_role" class="form-control">
							<option <?=($default_role == '0') ? "selected": "";?> value='0'>ADMIN</option>
							<option <?=($default_role == '1') ? "selected": "";?> value='1'>SUPERVISOR</option>
							<option <?=($default_role == '2') ? "selected": "";?> value='2'>EDITOR/CREATIVE</option>
							<option <?=($default_role == '3') ? "selected": "";?> value='3'>CUSTOMER SERVICE</option>
							<option <?=($default_role == '4') ? "selected": "";?> value='4'>FULL FILL/ GUDANG</option>
							<option <?=($default_role == '5') ? "selected": "";?> value='5'>VIP MEMBER</option>
							<option <?=($default_role == '6') ? "selected": "";?> value='6'>GENERAL MEMBER</option>
							
						</select>
							</td>
							</tr>
						</div>
					</div>






  							 <div class="form-group row">
							<tr>
							<th scope="row">
							<label class="col-sm-3 col-form-label" for="default_role" >Timezone<span class="text-danger">*</span></label></th>
							  <div class="col-sm-9">
							<td>
								<select name="timezone" class="form-control">
									<?php
									echo $this->setting_model->optTimeZone($timezone);
									?>
								</select>
							
							</td>
							</tr>
						</div>
					</div>






                        <div class="form-group row">
                       <tr>
						<th scope="row" >
						<label  class="col-sm-3 col-form-label" for="posts_per_page "">Jumlah Produk per halaman<span class="text-danger">*</span></label></th>
						 <div class="col-sm-9">
						<td>
                             <input name="produk_per_halaman" type="number" step="1" min="1" id="produk_per_halaman" value="10" class="small-text" class="form-control"  value="<?=$produk_per_halaman;?>" /> produk</td>
                          </div>
                       </div>


                        	 

                           <div class="form-group row">
                          <label class="col-sm-3 col-form-label">image size <span class="text-danger">*</span></label>
                          <div class="col-sm-3">
                              <input name="image_width" class="form-control" placeholder="width" type="text"  value="<?=$image_width;?>">
                          </div>
                          *
                          <div class="col-sm-3">
                              <input name="image_height" class="form-control" placeholder="height"type="text" value="<?=$image_height;?>">
                          </div>
                       </div><br> <br>
                       <p class="submit"><input type="submit" name="updateSetting" id="submit" class="button button-primary" value="Save Changes"  /></p>
                   </div>
          </div>
</form>