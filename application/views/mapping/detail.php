<div class="container">
    <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    Gisgeopalu
                </div>

                <div class="card" style="">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/<?= $mapping['gambar']; ?>" class="card-img" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                        <h5 type="text" name="nama" class="text-muted"><?= $mapping['nama'] ;?></h5>

                    <p class="card-text"><?= $mapping['nama'] ;?></p>
                    <p class="card-text"><?= $mapping['latitude'] ;?></p>
                    <p class="card-text"><?= $mapping['longtitude'] ;?></p>
                    <p class="card-text"><?= $mapping['keterangan'] ;?></p>







                    <a href="<?php echo base_url('mapping'); ?>" class="btn btn-success">Kembali</a>
                    </div>






                  </form>
                </div>

        </div>
      </div>
      </div>
    </div>

    </div>
</div>
</div>
