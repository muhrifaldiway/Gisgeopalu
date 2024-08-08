

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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">



        <h4 class="m-0 font-weight-bold text-warning"><i class="fas fa-book"></i> Daftar Data Geowisata
</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Latitude</th>
                <th class="text-center">Longitude</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $no= 1;


               foreach ($mapping as $pe)

               {
               ?>

              <tr>
                <td><?= $no;?></td>
                <td><?= $pe['nama_tempat'];?></td>
                <td><?= $pe['lat_long'];?></td>
                <td><?= $pe['long_lat'];?></td>
                <td><img src="<?= base_url('assets/images/file/');?><?= $pe['gambar']; ?>" width="50" alt=""></td>
                <td><?= $pe['keterangan'];?></td>


                <td>

                  <script>
                    function dialogHapus(urlHapus) {
                      if (confirm("Apakah anda yakin ingin menghapus ?")) {
                        document.location = urlHapus;
                      }
                    }
                    </script>

                    <a href="<?= base_url(); ?>mapping/hapus/<?= $pe['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">hapus
                    </a>






                </td>

              </tr>
              <?php
                $no++;
              }

              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
