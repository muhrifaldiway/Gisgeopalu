<!doctype html>

<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title;?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/beranda/images/preloader.gif">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>normalize.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>transitions.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>simpleWeather.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>flexslider.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>owl.theme.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>MetroJs.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>swiper.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>main.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>color.css">
	<link rel="stylesheet" href="<?= base_url('assets/beranda/css/');?>responsive.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/leaflet/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
   crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<script src="<?= base_url('assets/beranda/js/vendor/');?>modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	
	<div id="status">
		<div id="preloader" class="preloader">
			<img src="<?= base_url('assets/beranda/images/');?>preloader.gif" alt="Preloader" />
		</div>
	</div>
	
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-haslayout tg-header1">
			<div class="tg-topbar tg-haslayout">
				<div class="tg-weatherbox">
					<div id="tg-weather" class="tg-weather"></div>
				</div>
				
				<div class="tg-updateticker">
					<strong>headlines:</strong>
					<div id="tg-updateticker-slider" class="tg-updateticker-slider">
						<div class="swiper-wrapper">
									<?php foreach($geowisata as $p) :?>
							<div class="swiper-slide">
								<div class="tg-description">
									<p><?= $p['nama_tempat'];?> <a href="#"> ( <?= word_limiter($p['keterangan'], 2, '') ;?> )</a></p>
								</div>
							</div>
									<?php endforeach ;?>
						</div>
										
						<div class="tg-prev"><span class="fa fa-angle-left"></span></div>
						<div class="tg-next"><span class="fa fa-angle-right"></span></div>
					</div>
				</div>

				<div class="tg-topbarrightwidgets">
                    <nav class="tg-addnav">
                        <ul>
                            <li><a href="Login">login</a></li>
                            <li><a href="Login/Register">register</a></li>
                        </ul>
                    </nav>
                    <ul class="tg-socialicons">

                    </ul>

                </div>
				
			</div>
			<div class="tg-navigationarea tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<strong class="tg-logo">
								<a href="index.html"><img src="<?= base_url('assets/beranda/images/');?>1.png" alt="image description"></a>
							</strong>
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
									<ul>
										<li class="tg-hasdropdown">
											<a href="./">Home</a>
										</li>
										<li class="tg-hasdropdown">
											<a href="#geo">Geowisata</a>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-fullpost-slider" class="tg-fullpost-slider tg-fullpost">
					<div class="container-fluid">

						     <div id="map" style="width: 100%; height:500px;"></div>

						</div>
			<article class="tg-theme-post item">
				
						<a href="#">
						<img src="<?=base_url('assets/images/');?>3.jpg" style="width: 100%; height:500px;" alt="image description">
						</a>

					<figcaption>
						<div class="tg-box">
							<div class="tg-postcontent">
								<div class="container">
									<a class="tg-btn-border" href="#geo">Get Started</a>
									<div class="tg-postcontent-holder">

										<div class="tg-border-heading">
											<h2><a href="#"><b>Selamat Datang Di Website Geowisata</b><br></h2><h3>Sulawesi Tengah (Palu)</h3></a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</figcaption>
				
			</article>


		</div>

		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					
						<!--************************************
								Content Start
						*************************************-->
						<div class="col-sm-12">
							<div id="tg-content-upper" class="tg-content tg-haslayout">
								<!--************************************
										What's Hot Start
								*************************************-->
								<section id="geo" class="tg-haslayout tg-whatshot">
									<div class="tg-section-heading">
										<h2><b>Geowisata</b></h2>
										
									</div>
									
								</section>
								<!--************************************
										What's Hot End
								*************************************-->
								
								<!--************************************
										Categories Start
								*************************************-->
									<?php foreach($geowisata as $p) :?>
								<div class="row">
  <div class="col">
    
      <h5 class="text-secondary" id="harga"><?= $p['nama_tempat'];?></h5>
    
    <div class="card">
      <img src="assets/images/file/<?= $p['gambar'];?>" width="100px" class="card-img-top" alt="Kadidiri"></div></div>
      <div class="card-body">
        <p class="card-text"><?= $p['keterangan'];?></p>
        <p><?=$p['tanggal'];?></p><br>
        <a class="btn btn-warning text-white" type="button" href="geowisata/wisata/<?= $p['id'];?>"> <i class="fa fa-map"></i> <b>Selengkapnya</b></a><br><br>
       
      </div>
    </div>
  </div>
  <?php endforeach ;?>
</div>
</div>
<br><br>

								<!--************************************
										Categories End
								*************************************-->
							</div>
						</div>
					</div>
				</div>
						<!--************************************
								Content End
						*************************************-->

						
				
			<!--************************************
					Popular Posts Start
			*************************************-->

			<!--************************************
					Popular Video Slider Start
			*************************************-->
			<section class="tg-papular-videos tg-haslayout">
				<div class="container-fluid">
					<div class="row">
						
						<div class="tg-postlistitem">
							<div class="tg-postitem tg-theme-post">
								<figure>
									<img src="assets/images/web/1.jpg" style="width: 100%; height:500px;" alt="image description">
									<figcaption>
										<div class="tg-box">
											<div class="tg-postcontent">
												<div class="tg-border-heading">
													<h3><a>Masjid Arkam Babu Rahman</a></h3>
												</div>
												
											</div>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="tg-postitem tg-theme-post">
								<figure>
									<img src="assets/images/web/tanjungkarang.jpg" style="width: 100%; height:500px;" alt="image description">
									<figcaption>
										<div class="tg-box">
											<div class="tg-postcontent">
												<div class="tg-border-heading">
													<h3><a>Tanjung Karang</a></h3>
												</div>
												
											</div>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="tg-postitem tg-theme-post">
								<figure>
									<img src="assets/images/web/bora.jpeg" style="width: 100%; height:500px;" alt="image description">
									<figcaption>
										<div class="tg-box">
											<div class="tg-postcontent">
												<div class="tg-border-heading">
													<h3><a>Air Panas Bora</a></h3>
												</div>
												
											</div>
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="tg-postitem tg-theme-post">
								<figure>
									<img src="assets/images/web/fosil.jpg" style="width: 100%; height:500px;" alt="image description">
									<figcaption>
										<div class="tg-box">
											<div class="tg-postcontent">
												<div class="tg-border-heading">
													<h3><a>Fosil Meluska</a></h3>
												</div>
												
											</div>
										</div>
									</figcaption>
								</figure>
							</div>
						</div>
			
					</div>
				</div>
			</section>
			<!--************************************
					Popular Video Slider End
			*************************************--> 

			<!--************************************
					Popular Video Slider End

				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="tg-four-column tg-haslayout">
						<div class="col-sm-12">
							<div class="tg-col tg-about-us">
								<div class="tg-section-heading">
									<h2>Geowisata</h2>
								</div>
								<strong class="tg-logo">
									<a href="#">
										<img src="<?= base_url('assets/beranda/images/');?>4.png" alt="image description">
									</a>
								</strong>
								<div class="tg-description">
									<p>Geowisata merupakan pariwisata minat khusus dengan memanfaatkan potensi sumber daya alam seperti bentuk bentang alam, batuan, struktur geologi dan sejarah kebumian, sehingga diperlukan peningkatan pengayaan wawasan dan pemahaman proses fenomena fisik alam.
									Jalur Sesar Palu-Koro memiliki Panjang 
									kurang lebih 500 Km mengarah Utara-Selatan 
									terdiri dari 3 wilayah administrasi yakni Kab. 
									Donggala, Kota Palu dan Kab. Sigi (Daryono, 
									2016). Di sepanjang jalur Sesar Palu-Koro 
									terdapat daya tarik geowisata yang berpotensi 
									menjadi situs warisan geologi yang tersebar 
									didalam beberapa wilayah. Daya tarik 
									geowisata tersebut dibedakan atas situs sebagai 
									bukti sejarah aktivitas geologi (geoevidences) 
									dan bentuk karena proses geologi 
									(geologicalfeatures). Dengan luas kawasan 
									yang terbatas membentang dari utara hingga 
									selatan, maka jalur Sesar Palu-Koro ini 
									diberikan nama sesuai keterkaitan sejarah 
									geologi dengan peradapan makhluk hidup 
									diatasnya yaitu Kawasan Geowisata Palu-Koro. </p>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="tg-copyrights">
				<div class="container">

					<p class="pull-left">© 2022  |  All Rights Reserved</p>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->

	<!--************************************
			Register Start
	*************************************-->

	<!--************************************
			Register End
	*************************************-->
	<script src="<?= base_url('assets/beranda/js/vendor/');?>jquery-library.js"></script>
	<script src="<?= base_url('assets/beranda/js/vendor/');?>bootstrap.min.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>jquery.cycle2.min.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>jquery.cycle2.carousel.min.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>simpleWeather.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>owl.carousel.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>isotope.pkgd.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>flexslider.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>parallax.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>MetroJs.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>swiper.js"></script>
	<script src="<?= base_url('assets/beranda/js/');?>main.js"></script>



<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>


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

</body>

</html>
