<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Edit Kategori Pages
            </h2>
          </div>
          <div class="body">
            <form action="<?php echo base_url() ?>index.php/kategori/update" method="post">
              <label for="namaKategori">Kategori</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="namaKategori" id="namaKategori" class="form-control" placeholder=" Masukkan Kategori" value="<?php echo $namaKategori->namaKategori ?>">
                  <input type="hidden" name="idKategori" value="<?php echo $namaKategori->idKategori ?>">
                </div>
              </div>
              <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>