
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title;?></title>
  <link rel="icon" href="<?= base_url('assets/beranda/images/');?>preloader.gif">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="<?=base_url('assets/beranda/home/');?>styles/css/slick.css">
  <link rel="stylesheet" href="<?=base_url('assets/beranda/home/');?>styles/css/slick-theme.css">
  <link rel="stylesheet" href="<?=base_url('assets/beranda/home/');?>styles/css/jquery.datepicker2.css">
  <link rel="stylesheet" href="<?=base_url('assets/beranda/home/');?>styles/css/animate.css">

  <link rel="stylesheet" href="<?=base_url('assets/beranda/home/');?>styles/style.css">
</head>
<body>
<div class='loading'>
    <div class='lds-dual-ring'><img src="<?= base_url('assets/beranda/images/');?>preloader.gif" alt="Preloader" /></div>
</div>
<header id="header-2">
    <div class="wand-container">
        <div class="header-content2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="index-2.html"><img src="<?= base_url('assets/beranda/images/');?>1.png" alt="logo"></a>
            </div>
            
            <nav class="header-2-nav">
                <ul>
                    <li>
                        <a href="<?php echo base_url('geowisata'); ?>">HOME </a>
                        <a href="<?php echo base_url('login'); ?>">LOGIN </a> 
                </ul>
            </nav> 

            <nav class="header-nav-mobile">
    <ul>
        <li>
            <a href="./">HOME </a>
            <a href="index-6.html">LOGIN </a> 
        </li>
      
    </ul>
</nav> 

            <div class="header-content2__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> 
    </div>
</header>




<!-- slider-banner-4 -->
<section>
    <div class="slider-banner-4">
        <div class="slider-banner-4__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar2'];?>" alt="scubadiving">

            <div class="slider-banner-4__item__text-area animated bounceIn">
                <div class="wand-container">
                    <div class="slider-banner-4__item__text">     
                        <span>Selamat Datang Di</span><span class="slider-banner-2__item__text__line"></span>
                        <h1><?= $geowisata['nama_tempat'];?><br> Geowisata Palu</h1>
                    </div>
                </div> 
            </div>
           
            
        </div>

    </div>
    <!-- preview-video-3 -->
    <div class="preview-video-3">
        <div class="preview-video-3__close" ></div> 
        <div class="preview-video-3__area">
            <span class="preview-video-3__btn-close" >&times;</span> 
            <iframe class="preview-video-3__iframe" src="#" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" data-src = "https://www.youtube.com/embed/8PNTZEv-e54?autoplay=1" allowfullscreen></iframe>   
        </div>                    
    </div>
<!-- page-figure -->
</section>








    

<section class="destination-5">
    <div class="container">
        <div class="destination-5__tittle">
            <!-- section tittle -->
            
            
            
            <div class="section-tittle">
    <h2>discover now</h2>
    <div class="section-tittle__line-under"></div>
    <p>Top <span>Destination</span></p>
</div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="destination-item.html" class="destination-5__item">
                    <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar2'];?>" alt="desti51">
                    <span class="destination-5__item__below-tittle">Spot One</span>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="destination-item.html" class="destination-5__item">
                    <span class="destination-5__item__upper-tittle">Spot Two</span>
                    <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar3'];?>" alt="desti51=2">
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="destination-item.html" class="destination-5__item">
                    <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar4'];?>" alt="desti53">
                    <span class="destination-5__item__below-tittle">Spot Three</span>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a href="destination-item.html" class="destination-5__item">
                    <span class="destination-5__item__upper-tittle">Spot Four</span>
                    <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar5'];?>" alt="desti54">
                </a>
            </div>
        </div>
    </div>
</section>


<section>
    <h2 class="galery-h2">galerry</h2>
    <div class="gallery">
        <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar4'];?>" alt="gall1">
        <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar5'];?>" alt="gall2">
        <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar6'];?>" alt="gall3">       
    </div>
    <div class="container">
        <div class="gallery-control"> 
            <span><?= $geowisata['nama_tempat'];?> Photo Gallery</span>
            <div class="gallery-control__left">
                <div class="gallery-control__counter">
                    <span class="gallery-control__counter--current"></span>
                    <span class="gallery-control__counter--cross">|</span>
                    <span class="gallery-control__counter--total"></span>
                </div>
                <div class="gallery-control__arrow">
                    <span class="leftArrow"><i class='fa fa-angle-left'></i></span>
                    <span class="rightArrow"><i class='fa fa-angle-right'></i></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="best-selling-tour__tittle">
            <!-- section tittle -->
            
            
            
            <div class="section-tittle">
    <h2>find our most</h2>
    <div class="section-tittle__line-under"></div>
    <p>Best <span>Tours</span></p>
</div>
        </div>
        <div class="best-selling-tour">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar'];?>" alt="bestsell1">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating"></p>
                                </div>
                               
                            </div>
                        </div>
                    </a>     
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="tour-item.html" class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar2'];?>" alt="bestsell2">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating"></p>
                                </div>
                                
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar3'];?>" alt="bestsell3">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating--4star"></p>
                                </div> 
                            </div>
                        </div>
                    </a> 
                </div>

                <div class="col-lg-4 col-md-6">
                    <a class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar4'];?>" alt="bestsell4">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating"></p>
                                </div> 
                            </div>
                        </div>
                    </a>     
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar5'];?>" alt="bestsell5">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating--4star"></p>
                                </div>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="best-selling-tour__item">
                        <div class="best-selling-tour__item__thumb">
                            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar6'];?>" alt="bestsell3">
                            <div class="best-selling-tour__item__info">
                                <div class="best-selling-tour__item__tittle">
                                    <h3 class="trending-tour-item__name"><?= $geowisata['nama_tempat'];?> Spot</h3>
                                    <p class="trending-tour-item__group-infor__rating"></p>
                                </div>
                            </div>
                        </div>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>



<section class="type-of-tour-area">
   
    <div class="container">
       
        <div class="type-of-tour__tittle">
            <!-- section tittle -->
            
            
            
            <div class="section-tittle">
    <h2>Geowisata</h2>
    <div class="section-tittle__line-under"></div>
    <p>Tips of  <span>Tours</span></p>
</div>
        </div>
        <div class="type-of-tour">
            <a href="#" class="type-of-tour__item">
                <div class="type-of-tour__item__img"><img src="<?=base_url('assets/beranda/home/');?>images/uploads/destination/icon5-1.png" alt="icon5-1"></div>
                <p>Rencanakan</p>
            </a>
            <a href="#" class="type-of-tour__item">
                <div class="type-of-tour__item__img"><img src="<?=base_url('assets/beranda/home/');?>images/uploads/destination/icon5-2.png" alt="icon5-2"></div>
                <p> Kunjungi </p>
            </a>
            <a href="#" class="type-of-tour__item">
                <div class="type-of-tour__item__img"><img src="<?=base_url('assets/beranda/home/');?>images/uploads/destination/icon5-5.png" alt="icon5-3"></div>
                <p> Nikmati </p>
            </a>
            <a href="#" class="type-of-tour__item">
                <div class="type-of-tour__item__img"><img src="<?=base_url('assets/beranda/home/');?>images/uploads/destination/icon9.png" alt="icon5-4"></div>
                <p>Menjaga Kebersihan</p>
            </a>
            
        </div>
     
    </div>
</section>

<section>
    <div class="container">
        <div class="travel-tip-2__tittle">
                <!-- section tittle -->
            
            
            
            <div class="section-tittle">
    <h2>Geowisata</h2>
    <div class="section-tittle__line-under"></div>
    <p>Notice<span> Tour</span></p>
</div>
        </div>
        <div class="travel-tip-2">
            <div class="travel-tip-2__item">
                <img class="travel-tip-2__thumb" src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar'];?>" alt="tralveltip2-1">
            
                <div class="col-lg-6">
                    <a href="blog-single.html" class="travel-tip-2__item__info">
                        <h3><?= $geowisata['nama_tempat'];?></h3>
                        <span><i class="far fa-calendar-check"></i><?= $geowisata['tanggal'];?> </span>
                        <p><?= $geowisata['keterangan'];?></p>
                    </a>
                </div>
            </div>    
        </div>
    </div>
</section>

<section>
    <h2 class="instagram__tittle">instagram</h2>
    <div class="instagram">
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar'];?>" alt="instagram1">
        </a>
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar2'];?>" alt="instagram2">
        </a>
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar3'];?>" alt="instagram3">
        </a>
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar4'];?>" alt="instagram4">
        </a>
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar5'];?>" alt="instagram5">
        </a>
        <a href="#" class="instagram__item">
            <img src="<?=base_url('assets/images/file/');?><?= $geowisata['gambar6'];?>" alt="instagram6">
        </a>
    </div>
</section>




<footer id="footer-4">
    <div class="scroll-top">
    <i class="fas fa-angle-up"></i>
</div>
    <div class="container">
        <div class="footer-menu">
            <div class="footer-menu__item">
               
            </div>
            
            <a href="#" class="footer-menu__item"><img class="footer-menu__logo" src="<?= base_url('assets/beranda/images/');?>4.png" alt="footerlogo"></a>
            
            <div class="footer-menu__item">
               
            </div> 
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright__area">
                <div class="copyright__license">
                    Copyright <i class="far fa-copyright"></i> 2022 Fita Lasagena. All Rights Reserved.
                </div>
                <div class="copyright__social">
                    <a href="#"><img src="<?=base_url('assets/beranda/home/');?>images/socials/copytight-instar.png" alt="instar-copyright"></a>
                    <a href="#"><img src="<?=base_url('assets/beranda/home/');?>images/socials/copytight-facebook.png" alt="facebook-copyright"></a>
                    <a href="#"><img src="<?=base_url('assets/beranda/home/');?>images/socials/copytight-twitter.png" alt="twitter-copytight"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?=base_url('assets/beranda/home/');?>scripts/jquery-3.4.1.js"> </script>

<script src="<?=base_url('assets/beranda/home/');?>scripts/slick.min.js"></script>
<script src="<?=base_url('assets/beranda/home/');?>scripts/jquery.datepicker2.js"></script>
<script src="<?=base_url('assets/beranda/home/');?>scripts/isotope.pkgd.min.js"></script>


<script src="<?=base_url('assets/beranda/home/');?>scripts/app.js"></script>
</body>

</html>