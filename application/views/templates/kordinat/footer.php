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
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
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

<script src="<?= base_url('assets/'); ?>gisgeo/leaflet-geosearch/dist/geosearch.umd.js"></script>



 <script>

 const providerOSM = new GeoSearch.OpenStreetMapProvider();

 //leaflet map
 var leafletMap = L.map('leafletMap-registration', {
 fullscreenControl: true,
 // OR
 fullscreenControl: {
     pseudoFullscreen: false // if true, fullscreen to page width and height
 },
 minZoom: 2
}).setView([-0.8990122667579497, 119.87704560363206], 12);

 L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
 attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
 }).addTo(leafletMap);


 leafletMap.on('click',function(e) {
     let latitude  = e.latlng.lat.toString().substring(0,15);
     let longitude = e.latlng.lng.toString().substring(0,15);
     // document.getElementById("latitude").value = latitude;
     // document.getElementById("longitude").value = longitude;
     let popup = L.popup()
         .setLatLng([latitude,longitude])
         .setContent("Kordinat : " + e.latlng.toString() )
         .openOn(leafletMap);

         document.getElementById('lat_long').value = e.latlng.lat
         document.getElementById('long_lat').value = e.latlng.lng
         if (theMarker != undefined) {
             leafletMap.removeLayer(theMarker);
         };
         theMarker = L.marker([latitude,longitude]).addTo(leafletMap);
 });

 const search = new GeoSearch.GeoSearchControl({
     provider: providerOSM,
     style: 'bar',
     searchLabel: 'Palu',
 });

 leafletMap.addControl(search);


 //melooping data menggunakan while

//menggunakan fungsi L.marker(lat, long) untuk menampilkan latitude dan longitude
//menggunakan fungsi str_replace() untuk menghilankan karakter yang tidak dibutuhkan



</script>
</body>

</html>
