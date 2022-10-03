<?php
if(empty($_SESSION['id_user']) or empty($_SESSION['username']))
{
  echo "<script>
      alert('Maaf, untuk mengakses halaman ini, silahkan Login terlebih dahulu..!!');
      document.location='index.php';
      </script>";
}
?>

<style>
				@media screen and (max-width: 520px) {
				table.responsive {
					width: 100%;}
				}
				
				#page-title:before {
					content: ' ';
					display: block;
					position: absolute;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
					z-index: 1;
					opacity: 0.3;
					background-repeat: no-repeat;
					background-position: 50% 0;
					background-size: cover; 
				}
				
				.title-header {
					width: fit-content; 
					padding: 10px 30px !important; 
					background-color: rgba(255, 255, 255, 0.7);
					border-radius: 10px;

                    
				}

			</style>

<html dir="ltr" lang="en-US"><head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="assets/css/swiper.css" type="text/css">
	<link rel="stylesheet" href="assets/css/dark.css" type="text/css">
	<link rel="stylesheet" href="assets/css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="assets/css/font-icon.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title></title>
<style data-styled="active" data-styled-version="5.1.1"></style><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>	<body class="stretched has-plugin-easing has-plugin-bootstrap has-plugin-lightbox has-plugin-fitvids has-plugin-swiper has-plugin-hoveranimation has-plugin-counter has-plugin-carousel device-touch has-plugin-isotope device-xs">	
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			<!-- Header
============================================= -->
<header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
	<div id="header-wrap" class="">
		<div class="container">
			<div class="header-row top-search-parent">
				<div id="logo">
					<a href="#" class="standard-logo">
						<img src="" alt="" style="height: 100px;">
					</a>
					<a href="#" class="retina-logo">
						<img src="" alt="" style="height: 100px;">
					</a>
				</div>
				
				<div class="header-misc">
					
					
				</div>
				
				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>
				
				<nav class="primary-menu sub-title">
				<ul class="menu-container">
				<li class="menu-item">
					<a class="menu-link" href="beranda.php" style="">
						<div>Beranda</div> 
						<span>placeholder</span>
					</a>
				</li>

				<li class="menu-item sub-menu">
					<a class="menu-link" style="">
						<div>Data Ekskul
							<i class="icon-angle-down"></i>
						</div>
						<span>placeholder</span>
					</a>
						<ul class="sub-menu-container" style="display: none;">										
							<li class="menu-item" style="">
								<a class="menu-link" href="?halaman=arsip_surat&hal=tambahdata">
									<div><i class="fa fa-plus"></i>Tambah Data</div>
								</a>
							</li>
							<li class="menu-item" style="">
								<a class="menu-link" href="?terbaru">
									<div><i class="fa fa-angle-up"></i>Placeholder</div>
								</a>
							</li>
							<li class="menu-item" style="">
								<a class="menu-link" href="?terlama">
									<div><i class="fa fa-angle-down"></i>Placeholder</div>
								</a>				
							</li>
							<li class="menu-item" style="">
								<a class="menu-link" href="?nomorpesertaASC">
									<div><i class="fa fa-angle-up"></i>No. Peserta</div>
                                </a>
							</li>
							<li class="menu-item" style="">
								<a class="menu-link" href="?nomorpesertaDESC">
                                    <div><i class="fa fa-angle-down"></i>No. Peserta</div>
                                </a>
							</li>
						</ul>						
                        <button class="sub-menu-trigger fa fa-chevron-right"></button></li>
												<li class="menu-item sub-menu">
							<a class="menu-link" style=""><div>Akun<i class="icon-angle-down"></i></div>
								<span>placeholder</span>
							</a>
								<ul class="sub-menu-container" style="display: none;">										<li class="menu-item" style="">
											<a class="menu-link" href="?halaman=arsip_user&hal=tambahdata"><div><i class="fa fa-plus"></i>Tambah Akun</div></a>
												
										</li>
										<li class="menu-item" style="">
											<a class="menu-link" href="logout.php"><div><i class="fa fa-power-off"></i>Logout</div></a>
												
										</li>
									</ul>						<button class="sub-menu-trigger fa fa-chevron-right"></button></li>
												<li class="menu-item sub-menu">
                            <a class="menu-link" style=""><div>Info<i class="icon-angle-down"></i></div>
								<span>placeholder</span>
							</a>
								<ul class="sub-menu-container" style="display: none;">										<li class="menu-item" style="">
											                       
				</nav>
				
			</div>
		</div>
	</div>
	<div class="header-wrap-clone" style="height: 100px;"></div>
</header><!-- #header end -->		


<!-- /GetButton.io widget -->	
				<!-- 'common_footer' -->
				
		</div><!-- #wrapper end -->
		
		<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>
		
		<!-- JavaScripts
		============================================= -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/plugins.min.js"></script>
		
		<!-- Footer Scripts
		============================================= -->
		<script src="assets/js/functions.js"></script>
		
	

			
						
									
			 
