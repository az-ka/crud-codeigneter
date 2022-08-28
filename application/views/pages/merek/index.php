<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Merek Pages
            </h2>
          </div>
          <div class="body">
            <form action="<?php echo site_url('index.php/merek/save_data'); ?>" method="post">
              <label for="namaMerek">Merek</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="namaMerek" id="namaMerek" class="form-control" placeholder="Masukkan Merek">
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
                  <th>NAMA MEREK</th>
                  <th width="200">Action</th>
                </tr>
              </thead>
              <?php
              $count = 0;
              foreach ($merek->result() as $row) :
                $count++;
              ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row->namaMerek; ?></td>
                    <td>
                      <a href="<?php echo site_url('index.php/merek/delete/' . $row->idMerek); ?>">
                        <i class="material-icons">delete</i>
                      </a>
                      <a href="<?php echo site_url('index.php/merek/edit/' . $row->idMerek); ?>">
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