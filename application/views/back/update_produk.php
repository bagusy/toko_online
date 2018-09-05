<?php

foreach ($produk as $p) {

    ?>
                <form class="form-group m-form__group row" action="<?php echo base_url(); ?>index.php/produk/update/<?=$p['id_produk']; ?>" method="post">

                        <div class="col-lg-6">
                            <input type="text" name="name" class="form-control m-input" placeholder="masukkan nama produk"  value="<?=$p['name'];?>">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php
                                    echo $this->kategori_model->dropdown();
                                    ?>
                                </div>
                                <div class="col-md-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      tambah kategori
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="sku" class="form-control m-input" placeholder="masukkan sku" value="<?=$p['sku'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="gambar_produk" class="form-control m-input" placeholder="masukkan gambar" value="<?=$p['gambar_produk'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="berat" class="form-control m-input" placeholder="masukkan berat" value="<?=$p['berat'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="stok" class="form-control m-input" placeholder="masukkan stok" value="<?=$p['stok'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="link" name="url_drop" class="form-control m-input" placeholder="masukkan url" value="<?=$p['url_drop'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="harga_drop" class="form-control m-input" placeholder="masukkan harga drop" value="<?=$p['harga_drop'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="harga" class="form-control m-input" placeholder="masukkan harga1" value="<?=$p['harga'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="harga2" class="form-control m-input" placeholder="masukkan harga 2" value="<?=$p['harga2'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="asal_pengiriman" class="form-control m-input" placeholder=" masukkan asal" value="<?=$p['asal_pengiriman'];?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="submit" value="save" name="update" class="btn btn-success"><br>
                        </div>
                </form>
    <?php
}
    ?>

<!-- Modal -->
<form action="" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <input type="text" name="name" placeholder="masukkan nama kategori" class="form-control"><br>
        <?=$this->kategori_model->dropdown('', 'parent');?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
