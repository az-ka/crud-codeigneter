<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Edit Produk Pages
            </h2>
          </div>
          <div class="body">
            <?php foreach ($produk as $item) { ?>
              <?= form_open_multipart(base_url('index.php/produk/update')) ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Produk</label>
                <div class="col-sm-10">
                  <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="Masukkan Produk" value="<?php echo $item->namaProduk ?>">
                  <input type="hidden" name="idProduk" class="form-control" value="<?php echo $item->idProduk ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Harga</label>
                <div class="col-sm-10">
                  <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" value="<?php echo $item->harga ?>">
                </div>
              </div>
              <div class=" form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Stok</label>
                <div class="col-sm-10">
                  <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok" value="<?php echo $item->stok ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $item->deskripsi ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                    <option value="Baru">Baru</option>
                    <option value="Bekas">Bekas</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Kategori</label>
                <div class="col-sm-10">
                  <select class="form-control" name="idKategori">
                    <?php foreach ($kategori as $g) : ?>
                      <option value="<?= $g->idKategori ?>"><?= $g->namaKategori ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Merek</label>
                <div class="col-sm-10">
                  <select class="form-control" name="idMerek">
                    <?php foreach ($merek as $g) : ?>
                      <option value="<?= $g->idMerek ?>"><?= $g->namaMerek ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Gambar</label>
                <br>
                <div class="col-sm-10">
                  <input name="foto" type="file" class="form-control-file">
                </div>
              </div>
              <div class="row">
                <div class="col m-l-30">
                  <button type="submit" class="btn btn-info btn-sm float-right">
                    Submit
                  </button>
                </div>
              </div>
              <?= form_close() ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>