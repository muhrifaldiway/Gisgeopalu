

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
         <h2 class="text-warning"><b>Add Location</b></h2>
         <hr>
             <form action="<?php echo base_url('marker/add') ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                   <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Latitude</label>
                     <input type="text" class="form-control" id="lat_long" name="lat_long">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('lat_long'); ?></small>
                 </div>

                   <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Longitude</label>
                     <input type="text" class="form-control" id="long_lat" name="long_lat">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('long_lat'); ?></small>
                 </div>
               </div>

                 <div class="form-group">
                     <label for="exampleFormControlInput1">Nama Tempat</label>
                     <input type="text" class="form-control" name="nama_tempat" required>
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_tempat'); ?></small>
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlInput1">Foto</label>
                     <input type="file" class="form-control" name="gambar">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar'); ?></small>
                 </div>

                 <div class="row">
                 <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Foto 2</label>
                     <input type="file" class="form-control" name="gambar2">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar2'); ?></small>
                 </div>

                 <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Foto 3</label>
                     <input type="file" class="form-control" name="gambar3">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar3'); ?></small>
                 </div>

                 <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Foto 4</label>
                     <input type="file" class="form-control" name="gambar4">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar4'); ?></small>
                 </div>

                 <div class="col-lg-6">
                     <label for="exampleFormControlInput1">Foto 5</label>
                     <input type="file" class="form-control" name="gambar5">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar5'); ?></small>
                 </div>
                 </div>
                 <div class="form-group">
                     <label for="exampleFormControlInput1">Foto 6</label>
                     <input type="file" class="form-control" name="gambar6">
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('gambar6'); ?></small>
                 </div>
                 <div class="form-group">
                    <label class="form-label" name="tanggal" for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" required/>
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                  </div>
                 <div class="form-group">
                     <label for="exampleFormControlInput1">Keterangan</label>
                     <textarea class="form-control" name="keterangan" cols="30" rows="5" required></textarea>
                       <small id="emailHelp" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                 </div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-warning">Add</button>
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
</br>
  <!-- /.container-fluid -->
