<section class="content">
  <div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              Edit Merek Pages
            </h2>
          </div>
          <div class="body">
            <form action="<?php echo base_url() ?>index.php/merek/update" method="post">
              <label for="namaMerek">Merek</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" name="namaMerek" id="namaMerek" class="form-control" placeholder=" Masukkan Merek" value="<?php echo $namaMerek->namaMerek ?>">
                  <input type="hidden" name="idMerek" value="<?php echo $namaMerek->idMerek ?>">
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