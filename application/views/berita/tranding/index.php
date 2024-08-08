

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
        <h4 class="m-0 font-weight-bold text-success"><i class="fas fa-book"></i> Daftar Berita Tranding
            <a href="tambah_tranding" class="btn btn-primary"><b>Add</b></a></h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Penulis</th>
                <th class="text-center">Isi</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $no= 1;


               foreach ($tranding as $pe)

               {
               ?>

              <tr>
                <td><?= $no;?></td>
                <td><?= $pe['judul'];?></td>
                <td><?= $pe['tanggal'];?></td>
                <td><img src="<?= base_url('assets/images/file/');?><?= $pe['gambar']; ?>" width="50" alt=""></td>
                <td><?= $pe['penulis'];?></td>
                <td><?= $pe['isi'];?></td>


                <td>

                  <a href="<?= base_url(); ?>berita/Tubah/<?= $pe['id']; ?>" class="badge badge-success float">ubah
                  </a>

                  <script>
                    function dialogHapus(urlHapus) {
                      if (confirm("Apakah anda yakin ingin menghapus ?")) {
                        document.location = urlHapus;
                      }
                    }
                    </script>

                    <a href="<?= base_url(); ?>berita/Thapus/<?= $pe['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">hapus
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
