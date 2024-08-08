<!-- Footer -->

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/admin/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/admin/'); ?>js/demo/datatables-demo.js"></script>

<script src="<?= base_url('assets/'); ?>leaflet/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
   crossorigin=""></script>



         <script>

       	var map = L.map('map').setView([-0.8990122667579497, 119.87704560363206], 13);

       	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
       		attribution: 'Map data &copy; contributors, ' +
       			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
       		id: 'mapbox/streets-v11',



       	}).addTo(map);

        <?php foreach ($wisata as $key => $value ) { ?>
         L.marker([<?= $value->lat_long ?>,<?= $value->long_lat ?>]).addTo(map).bindPopup('<b><?=$value->nama_tempat ?>
         </b>');

         <?php }?>

         var popup = L.popup();

          function onMapClick(e) {
              popup
                  .setLatLng(e.latlng)
                  .setContent("Map kordinat " + e.latlng.toString())
                  .openOn(map);
          }

          map.on('click', onMapClick);

          var latlngs = [
//SESAR PALU KORO
            [
              [1.566936, 119.828568],
              [0.673996, 119.540863],
              [0.115768, 119.464645],
              [-1.258383, 120.025635],
              [-1.620816, 120.248108],
            ],

            //SESAR MATANO

            [
              [-1.663096, 120.306473],
              [-1.930756, 120.72876],
              [-2.107115, 121.455231],
              [-2.271103, 121.917343],
              [-2.19014, 122.4646],
              [-2.091332, 123.035889],
              [-1.904678, 123.640137],
              [-1.826717, 123.710175],
              [-1.766871, 123.879089],
            ],

            [
              [-2.271176, 121.917375],
              [-2.35261, 122.184448],
              [-2.519451, 122.431641],
              [-2.760894, 122.67334],
              [-3.254596, 122.904053],
              [-3.671313, 122.937012],
              [-3.888369, 122.89856],
              [-4.04181, 122.739258],
              [-4.097425, 122.651367],
              [-4.163993, 122.750244],
              [-4.381466, 122.969971],
              [-4.503595, 123.175964],
              [-4.688119, 123.409424],
              [-5.018716, 123.640137],
              [-5.620359, 123.925781],
            ],

            [
              [-4.097395, 122.651367],
              [-4.062494, 122.629395],
              [-3.974957, 122.442627],
              [-3.6143, 121.80542],
              [-3.257887, 121.393433],
              [-2.925486, 121.091309],
              [-2.585304, 120.838623],
              [-2.358099, 120.651855],
              [-2.153911, 120.500793],
              [-1.906874, 120.352478],
              [-1.762204, 120.293427],
            ],

            [
              [-1.423682, 122.807922],
              [-1.177651, 123.00293],
              [-1.151839, 123.082581],
              [-1.133715, 123.365479],
              [-1.194127, 123.563232],
              [-1.50715, 123.673096],
              [-1.503306, 124.074097],
            ],

            //LUWUK

            [
                [-0.957963, 123.008423],
                [-0.786596, 123.093567],
                [-0.572378, 123.263855],
                [-0.556998, 123.425903],
                [-0.257079, 124.112549],
                [-0.124695, 124.274597],

            ],

            //GORONTALO

            [
              [1.46981, 122.492065],
              [1.442353, 122.772217],
              [1.380299, 122.884827],
              [1.292432, 122.961731],
              [1.17161, 123.022156],
              [1.037053, 123.022156],
              [0.910728, 123.00293],
              [0.849487, 122.996063],
              [0.775336, 123.000183],
              [0.70146, 123.017349],
              [0.657517, 123.036575],
              [0.59641, 123.064041],
              [0.48147, 123.129272],
              [0.317503, 123.285828],
              [0.188415, 123.447876],
              [0.04834, 123.763733],
              [-0.039551, 124.008179],
              [-0.124687, 124.274592],
              [-0.109039, 124.355621],
              [-0.077454, 124.465485],
              [-0.049026, 124.51149],
            ],

            //PALU KORO

            [
              [1.593018, 119.839897],
              [1.698787, 120.162964],
              [1.734476, 120.396423],
              [1.777303, 120.734253],
              [1.727887, 121.003418],
              [1.687805, 121.184692],
              [1.646624, 121.585693],
              [1.607089, 122.640381],
              [1.601598, 123.447876],
              [1.558768, 124.008179],
              [1.555198, 124.333649],
              [1.581281, 124.589081],
              [1.636191, 124.716797],

            ]

          ];

          var polyline = L.polyline(latlngs, {color: 'red',weight: 3,}).addTo(map);

          // zoom the map to the polyline
          map.fitBounds(polyline.getBounds());

         </script>
<?php
/*
<script type="text/javascript">

      var map = L.map('map').setView([-0.90106,119.87490], 8);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: ''
      }).addTo(map);


      $.getJSON("<?= base_url()?>Admin/geowisata", function(data){
         $.each(data, function(i, field){

            var v_lat=parseFloat(data[i].latitude);
            var v_long=parseFloat(data[i].longtitude);

            L.marker([v_long,v_lat]).addTo(map)
              .bindPopup(data[i].nama);



         });
       });





</script>
*/
;?>
</body>

</html>
