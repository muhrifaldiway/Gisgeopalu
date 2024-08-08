<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 03:57:51 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title;?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="<?=base_url('assets/beranda/images/');?>preloader.gif">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/login/css/');?>bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/login/css/');?>fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/login/font/');?>flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/login/');?>style.css">
</head>

<body>
	
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
	<section class="fxt-template-animation fxt-template-layout15">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 order-md-2 fxt-bg-img" data-bg-image="<?= base_url('assets/images/web/');?>pantaitalise.jpeg">
					<div class="fxt-intro">
						<h1>Welcome To Geowisata Palu</h1>
						<p>Geowisata merupakan pariwisata minat khusus dengan memanfaatkan potensi sumber daya alam seperti bentuk bentang alam, batuan, struktur geologi dan sejarah kebumian, sehingga diperlukan peningkatan pengayaan wawasan dan pemahaman proses fenomena fisik alam.</p>
						<div class="fxt-page-switcher">
							<a href="./" class="switcher-text1">Log In</a>
							<a href="Register" class="switcher-text1 active">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 order-md-1 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="login-15.html" class="fxt-logo"><img src="<?= base_url('assets/beranda/images/');?>1.png" alt="Logo"></a>
						</div>
						<div class="fxt-form">
							<h2>Register</h2>
							<p>Create an account free and enjoy it</p>

							<form method="POST" action="<?= base_url('login/tambah');?>">
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" class="form-control" name="username" placeholder="Name" required="required">
										<i class="flaticon-user"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
										<i class="flaticon-envelope"></i>
									</div>
									<?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="password" class="form-control" name="password" placeholder="Password" required="required">
										<i class="flaticon-padlock"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<button type="submit" class="fxt-btn-fill">Register</button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="<?= base_url('assets/login/js/');?>jquery-3.5.0.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?= base_url('assets/login/js/');?>bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="<?= base_url('assets/login/js/');?>imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="<?= base_url('assets/login/js/');?>validator.min.js"></script>
	<!-- Custom Js -->
	<script src="<?= base_url('assets/login/js/');?>main.js"></script>

</body>

</html>
