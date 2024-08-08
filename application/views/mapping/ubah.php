

<!-- Begin Page Content -->
<div class="container-fluid">

  <?php if($this->session->flashdata('flash') ) : ?>

  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di tambahkan
              <?php $this->session->flashdata('flash');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>

  <?php elseif($this->session->flashdata('hapus') ) : ?>
  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di Hapus
              <?php $this->session->flashdata('hapus');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>


  <?php elseif($this->session->flashdata('ubah') ) : ?>
  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di Ubah
              <?php $this->session->flashdata('ubah');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>

  <?php endif;?>




  <div class="row"> <!-- class row digunakan sebelum membuat column  -->
     <div class="col-4"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
         <div class="jumbotron"> <!-- untuk membuat semacam container berwarna abu -->
         <h3 class="text-success"><b>Update Location</b></h3>
         <hr>
             <form action="<?php echo base_url('mapping/update') ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                     <div class="form-group">

                     <input type="hidden" name="id" value="<?= $mapping['id'] ;?>">

                     </div>
                   <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Latitude</label>
                     <input type="text" class="form-control" id="lat_long" name="lat_long" value="<?= $mapping['lat_long'];?>">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('lat_long'); ?></small>
                 </div>

                   <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Longitude</label>
                     <input type="text" class="form-control" id="long_lat" name="long_lat" value="<?= $mapping['long_lat'];?>">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('long_lat'); ?></small>
                 </div>
               </div>

                 <div class="form-group">
                     <label for="exampleFormControlInput1">Nama Tempat</label>
                     <input type="text" class="form-control" name="nama_tempat" value="<?= $mapping['nama_tempat'];?>" required>
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_tempat'); ?></small>
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlInput1">Gambar</label>
                     <input type="file" class="form-control" name="gambar">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar'); ?></small>
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlInput1" name="keterangan">Keterangan</label>
                     <textarea class="form-control"name="keterangan" type="text" id="keterangan" cols="30" rows="5" required><?= $mapping['keterangan'];?></textarea>
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                 </div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-success">Update</button>
                     <a href="<?php echo base_url('mapping'); ?>" class="btn btn-dark">Kembali</a>
                 </div>
             </form>
         </div>
     </div>
     <div class="col-8"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
         <!-- peta akan ditampilkan dengan id = mapid -->
          <div id="leafletMap-registration"></div>
     </div>
 </div>
  </div>
  <!-- /.container-fluid -->
