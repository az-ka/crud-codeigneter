<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Kategori Pages
            </h2>
          </div>
          <div class="body">
            <form action="<?php echo base_url() ?>index.php/kategori/save_data" method="post">
              <label for="namaKategori">Kategori</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="namaKategori" id="namaKategori" class="form-control" placeholder="Masukkan Kategori">
                </div>
              </div>
              <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
            </form>
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
                  <th>FIRST NAME</th>
                  <th width="200">Action</th>
                </tr>
              </thead>
              <?php
              $count = 0;
              foreach ($kategori->result() as $row) :
                $count++;
              ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row->namaKategori; ?></td>
                    <td>
                      <a href="<?php echo site_url('index.php/kategori/delete/' . $row->idKategori); ?>">
                        <i class="material-icons">delete</i>
                      </a>
                      <a href="<?php echo site_url('index.php/kategori/edit/' . $row->idKategori); ?>">
                        <i class="material-icons">edit</i>
                      </a>
                    <td>
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