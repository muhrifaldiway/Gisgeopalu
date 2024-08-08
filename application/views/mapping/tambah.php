<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">

                    <div class="text-success">Tambah Data Geowisata</div>

                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('mapping/tambah_aksi2') ?>" method="post">

                        <div class="form-group">

                            <input type="number" name="id" class="form-control" id="id" hidden>

                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                              <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-success" type="button">Latitude</button>
                                </span>
                                <input type="text" name="latitude" id="latitude" class="form-control">

                              </div><!-- /input-group -->
                              <small id="emailHelp" class="form-text text-danger"><?= form_error('latitude'); ?></small>
                            </div><!-- /.col-lg-6 -->

                            <div class="col-lg-6">
                              <div class="input-group">
                                <input type="text" name="longtitude" id="longtitude" class="form-control">

                                <span class="input-group-btn">
                                  <button class="btn btn-success" type="button">Longitude</button>
                                </span>
                              </div><!-- /input-group -->
                              <small id="emailHelp" class="form-text text-danger"><?= form_error('longitude'); ?></small>
                            </div><!-- /.col-lg-6 -->
                          </div><!-- /.row -->

                          <div class="form-group">
                            <label class="form-label" name="gambar" for="gambar"></label>
                            <input type="file" class="form-control" id="gambar" name="gambar"/>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar'); ?></small>
                          </div>

                        <div class="form-group">
                          <div class="mb-3">
                              <label for="keterangan" name="keterangan" class="form-label">Keterangan</label>
                              <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
                              </div>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>


                        <input type="submit" value="simpan" class="btn btn-success
  					            float-right"></input>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
