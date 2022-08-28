<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Produk Pages
            </h2>
          </div>
          <div class="body">
            <?= form_open_multipart(base_url('index.php/produk/save_data')) ?>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold">Produk</label>
              <div class="col-sm-10">
                <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="Masukkan Produk">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold">Harga</label>
              <div class="col-sm-10">
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold">Stok</label>
              <div class="col-sm-10">
                <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label font-weight-bold">Deskripsi</label>
              <div class="col-sm-10">
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi">
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
              <label class="col-sm-2 col-form-label font-weight-bold">Produk</label>
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
          </div>
        </div>
      </div>
    </div>

    <!-- Basic Table -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              List Kategori
            </h2>
          </div>
          <div class="body table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Merek</th>
                  <th>Stok</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              $count = 0;
              foreach ($join as $row) :
                $count++;
              ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['namaProduk']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['namaKategori']; ?></td>
                    <td><?php echo $row['namaMerek']; ?></td>
                    <td>
                      <img src="<?= base_url() ?>assets/images/<?= $row['foto']; ?>" alt="foto" width="200">
                    </td>
                    <td>
                      <a href="<?php echo site_url('index.php/produk/delete/' . $row['idProduk']); ?>">
                        <i class="material-icons">delete</i>
                      </a>
                      <a href="<?php echo site_url('index.php/produk/edit/' . $row['idProduk']); ?>">
                        <i class="material-icons">edit</i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>