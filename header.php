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
	<script src="https://kit.fontawesome.com/15ab4f5b8b.js" crossorigin="anonymous"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<title></title>
<body class="stretched has-plugin-bootstrap">	
<div id="wrapper" class="clearfix">
<header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
	<div id="header-wrap" class="">
		<div class="container">
			<div class="header-row top-search-parent">
				<div id="logo">
					<a href="#" class="standard-logo">
						<img src="assets/TestIcon.png" alt="" style="height: 100px;">
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
					<a class="menu-link" href="index.php" style="">
						<div>Beranda</div> 
						<span>Placeholder</span>
					</a>
				</li>

				<li class="menu-item sub-menu">
					<a class="menu-link" style="">
						<div>Data Ekskul
							<i class="icon-angle-down"></i>
						</div>
						<span>Ekstrakurikuler</span>
					</a>
						<ul class="sub-menu-container" style="display: none;">
						<li class="menu-item" style="">
								<a class="menu-link" href="">
								<div><i class="fa fa-list-alt"></i>Kegiatan Ekskul</div>
								</a>				
							</li>
						
						<?php
							if(isset($_SESSION['login'])){
								if($_SESSION['level']=="1"){
									include "header/formpendaftaran.php";
									include "header/datapendaftar.php";

								}else if($_SESSION['level']=="2"){
									include "header/datapendaftar.php";

								}else if($_SESSION['level']=="3"){
									include "header/formpendaftaran.php";
									include "header/datapendaftar.php";

								}
							}
							?>
						</ul>						
                        <button class="sub-menu-trigger fa fa-chevron-right"></button></li>
												
										
						<?php
							if(isset($_SESSION['login'])){
								if($_SESSION['level']=="4"){

								}else{
									include "header/pengumuman.php";

								}
							}
							?>

				
						<?php
							if($_SESSION['level']=="1"){
								include "header/dashboard.php";

							}else{
							} 
						?>				
				
				<li class="menu-item sub-menu">
                    <a class="menu-link" style="">
						<div class="fa fa-user-circle-o"><b style='font-family: Poppins;'><?php echo " "; echo $_SESSION['nama']; ?></b>
							<i class="icon-angle-down"></i>
						</div>
						<span> 
							<?php
								if($_SESSION['level']=="4"){
									echo "<b>Anda belum login</b>";

								}else{
									echo "<b>Anda telah login sebagai ";
									echo $_SESSION['level'];
									echo "</b>";
								} 
							?></span>
					</a>
						<ul class="sub-menu-container" style="display: none;">										
							<?php
								if($_SESSION['level']=="4"){
									include "header/login.php";

								}else{
									include "header/logout.php";

								}
							?>
						</ul>
						<button class="sub-menu-trigger fa fa-chevron-right"></button></li>

					</ul>
				</li>	

			</nav>
		</div>
	</div>
</div>


<div class="header-wrap-clone" style="height: 100px;"></div>
</header>
		<div id="gotoTop" class="icon-angle-up"></div>
		
		<!-- JavaScripts
		============================================= -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/plugins.min.js"></script>
		
		<!-- Footer Scripts
		============================================= -->
		<script src="assets/js/functions.js"></script>
		
	

			
						
									
			 
