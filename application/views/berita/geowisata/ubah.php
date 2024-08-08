<div class="container">
    <div class="row mt-6">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">

                    Tambah Data Berita Tranding
                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('berita/Bupdate') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <input type="number" name="id" class="form-control" id="id" value="<?= $bewisata['id'];?>" hidden>

                    </div>

                      <div class="form-group col-md-8">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $bewisata['judul'];?>" required>
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>

                  <div class="form-group col-md-6">
                    <label class="form-label" name="tanggal" for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $bewisata['tanggal'];?>" required/>
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                  </div>

                  <div class="form-group col-md-8">
                    <label class="form-label" name="gambar" for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $bewisata['gambar'];?>" required/>
                    <div class="col-sm-6">
                      <img src="<?= base_url('assets/images/file/').$bewisata['gambar'];?>" class="img-thumbnail">
                    </div>
                  </div>

                  <div class="form-group col-md-8">
                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $bewisata['penulis'];?>" required>
                  </div>

                  <div class="form-floating col-md-8">
                    <label for="isi">Isi</label>
                    <textarea type="text" class="form-control" name="isi" id="isi" value="<?= $bewisata['isi'];?>" style="height: 100px"><?= $bewisata['isi'];?></textarea>
                  </div><br>

                    <div class="form-group col-md-8">
                        <input type="submit" value="simpan" class="btn btn-primary
  					            "></input>
                        <a href="<?php echo base_url('berita/bewisata'); ?>" class="btn btn-dark">Kembali</a>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
</br>
