<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="<?php echo HEADER_DESCRIPTION ?>">
        <meta property="title" content="<?php echo HEADER_TITLE ?>" />
		<meta property="og:title" content="<?php echo HEADER_TITLE ?>" />
		<meta property="og:image" content="<?php echo base_url('images/sosmedshare.jpg')?>?thn=1" />
		<meta property="og:url" content="<?php echo base_url()?>" />
		<meta property="og:description" content="<?php echo HEADER_DESCRIPTION ?>" />
		<meta property="twitter:title" content="<?php echo HEADER_TITLE ?>" />
		<meta property="twitter:image:src" content="<?php echo base_url('images/sosmedshare.jpg')?>?thn=1" />
		
        <title><?php echo HEADER_TITLE ?></title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
		
		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/font-awesome.min.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/bootstrap.min.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/animate.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/owl.carousel.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/component.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/slit-slider.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/main.css')?>" />
		<link rel="stylesheet" href="<?php echo base_url('html/home/css/media-queries.css')?>" />


		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->
		<script src="<?php echo base_url('html/home/js/modernizr-2.6.2.min.js')?>"></script>

	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="html/home/img/preloader.gif"  />
			</div>
		</div>
		
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="wow fadeInUp">MR & MRS <span class="color">MUSLIM</span></h2>
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">WEDDINGS</h2>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">FIRST COME LOVE</h2>
								<h3 class="animated fadeInUp">now come <span class="color">marriage</span></h3>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">IN THE END</h2>
								<h3 class="animated fadeInLeft">Your heart will find the right <span class="color">home</span></h3>

							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">MR & MRS <span class="color">MUSLIM</span></h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#couple">Couple</a></li>
                        <li><a href="#the-day">The Day</a></li>
                        <li><a href="#testimonial">Friends</a></li>
                        <li><a href="#gallery">Gallery</a></li>

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!-- Start Couple Section -->
		<section id="couple">
			<div class="container">
				<div class="row">
				
					
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Couple</h2>
						<div class="border"></div>
					</div>
					<!-- Couple speech -->
					<div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="500ms">
                       <article class="couple-mate">
							<div class="member-photo">
								<img class="img-responsive" src="images/home/one.jpg" alt="Siska">
							</div>
							<div class="member-title">
								<h3>Fransiska Fitriyanti</h3>
								<span>The Bride</span>
							</div>							
							<div class="member-info">
							   <p>7 years ago, you came to my live and i never ever think that you will be my most important person in my live. I never think you are The One, my mr.Right. </p>
								<p>Masih ingat di setiap doa, saya selalu meminta didekatkan dengan orang yang baik, yang bisa membawa saya menjadi pribadi yang lebih baik, yang bisa membuat lebih dekat kepada-Nya. Dan 3 tahun yang lalu Allah kirimkan kamu kepada saya.  Allah memberikan keyakinan bahwa kamulah orang itu, orang yang bisa membawa saya ke tempat terbaik. Dunia dan akhirat. Together until Jannah, Insyaallah.</p>
								<p>And I know it's not gonna be easy, but i trust Jannah isn't just a dream if i search it with you. Don’t compare our love story to those you read in books. They’re written by scriptwriters, ours is written by God.</p>
								<br>
							</div>
						</article>
                    </div>
					
					<div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                       <article class="couple-mate">
							<div class="member-photo">
								<img class="img-responsive" src="images/home/two.jpg" alt="Wildan">
							</div>
							<div class="member-title">
								<h3>Wildan Muslim</h3>
								<span>The Groom</span>
							</div>
                           <div class="member-info">
                               	<p>Tepat 3 tahun yang lalu, memberanikan diri untuk menjanjikan kepadanya, diumur 25 thn (tahun ini) saya akan menikahinya. Walau pada perjalanannya banyak rintangan yang memungkinkan janji ini tak akan saya tepati, dengan meluruskan niat baik, Alhamdulillah dengan bantuan dan seizin Allah semua terasa begitu lancar dan dipermudah. Tak terhitung keajaiban yang silih berganti diberikan oleh Allah, memberikan apa yang terbaik untuk ku. </p>
                               	<p>"Boleh jadi kamu membenci sesuatu, padahal ia amat baik bagimu, dan boleh jadi (pula) kamu menyukai sesuatu, padahal ia amat buruk bagimu; Allah mengetahui, sedang kamu tidak mengetahui" (QS. Al-Baqarah:216)</p>
								<p>Terimakasih untuk selalu memberikan sikap optimis pada setiap langkah yang ku pilih.</p>
                           </div>
						</article>
                    </div>
					<!-- end Couple speech -->
					
				</div>  	
			</div>   	
		</section>   

		<section id="parallax-1" class="parallax-section">
			<div class="container">
				<div class="row">
				</div>
			</div>   	
		</section>   
		
		<!-- the day -->		
		<section id="the-day">
			<div class="container">
				<div class="row">
					
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>The MARRIAGE</h2>
						<h3>WHERE AND WHEN</h3>
						<div class="border"></div>
					</div>
					
					
					<div class="col-md-4 col-md-offset-2 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-map-marker fa-4x"></i>
							</div>
							<div class="about-content text-center">
								<h3>Location</h3>
							<p>PUSSEN ARHANUD, Jalan Stasion, Jl. Sriwijaya Raya No. 1, Kel. Setiamanah, Kec. Cimahi Tengah, Setiamanah, Cimahi Tengah, Kota Cimahi</p>
							</div>
						</div>
					</div> 
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-calendar fa-4x"></i>
							</div>
							<div class="about-content text-center">
								<h3>Date</h3>
								<p>Saturday October 07,2017 <br>Akad : 08.00 WIB, Resepsi : 11.00 - 14.00 WIB</p>
							</div>
						</div>
					</div> 
				
				</div> 
			</div> 
			
			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>	
			<!-- /Google Map -->
		</section> 
		
		<section id="parallax-2" class="parallax-section">
			<div class="container">
				<div class="row">
				</div>
			</div>   	
		</section>   
		
		<!-- testimonial -->
		<section id="testimonial">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
						<div class="title text-center">
							<h2>Our <span class="color">Friends</span></h2>
							<div class="border"></div>
						</div>
					</div> 
				</div> 
			</div>	
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
					<li class="mix wildan">
						<a href="javascript:void(0)" data-largesrc="images/home/friends/musa-dita.jpg" data-title="Musa & Dita" data-description="Musa:
						Karena sejatinya tujuan pernikahan adalah membangun. Membangunkan untuk sholat qiyamulail berjamaah. Membangunkan untuk sholat subuh berjamaah. Kenapa solat? Karena solat adalah tiangnya agama, dan itulah yang selalu diperintahkan oleh ayah-ibu mu disetiap saat bukan? Dan sekaranglah saatnya kalian berdua mengambil peran tersebut. Visi kedepan harus jelas, dan awalilah selalu semuanya dari sholat. Madrasatul ulla adalah relation goals yang diperintahkan rasulMu. Selalu berbaik sangkalah, selalu berbaik hatilah, mari kita belajar bersama sahabat :') (Sahabat, Musa Sulthon Sibghotulloh)
						</p><p>
						Dita:
						Kini kapal siap berlayar, kini nahkoda tak akan mampu pergi sendiri. Selamat menjelajah, temukan ilmu yang tak kau dapat ketika berdiri sendiri, manis dunia hanya setitik tetap tenang jutaan berkah Allah siap memandu kalian berdua. (Calon Sahabatnya Sahabat, Novadita Dwiputri)">
							<img src="images/home/friends/musa-dita.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Musa & Dita</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>						
					<li class="mix wildan">
						<a href="javascript:void(0)" data-largesrc="images/home/friends/anggia-yuni.jpg" data-title="Anggia & Yuni" data-description="'Semoga Allah mengumpulkan kesempurnaan kalian berdua, membahagiakan kesungguhan kalian berdua, memberkahi kalian berdua, dan mengeluarkan kebajikan dari kalian berdua yang banyak.' (Doa Rasulullah SAW saat menikahkan Fatimah Az-Zahra') H.R Anas Ibn Malik r.a <br>
						Barakallahu laka wa baraka 'alaika wa jama'a baynakuma fii khair. Wildan dan Siska<br>
						Menjadi keluarga yang sakinah, mawadah dan warahmah sampai ke surganya.</p><p>Aamiin">
							<img src="images/home/friends/anggia-yuni.jpg" alt="Anggia & Yuni">
							<div class="hover-mask">
								<h3>Anggia & Yuni</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<li class="mix wildan">
						<a href="javascript:void(0)" data-largesrc="images/home/friends/ifa.jpg" data-title="Puteri Sarah Nursyifayanti" data-description="<p>Halo. </p>
										<p>	Wildan itu di mata Ifa adalah orang yang sangat supportive dan perhatian sama teman. Wildan juga orang yang bisa membawa diri untuk jadi orang yang sukses dan berguna bagi keluarga dan teman-teman terdekat. Ga salah saat Siska memilih Wildan, karena Ifa yakin Wildan dapat menjadi kepala keluarga yang baik untuk Siska dan anak - anak nya kelak. Semoga keluarga Wildan nanti selalu diberkahi Allah, dikuatkan dalam menghadapi rintangan pernikahan dan diberi kebahagiaan selalu.</p>">
							<img src="images/home/friends/ifa.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Puteri Sarah Nursyifayanti</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<li class="mix wildan">
						<a href="javascript:void(0)" data-largesrc="images/home/friends/putri.jpg" data-title="Putri Irma Bratawijaya K" data-description="<p>Dear Wildan dan Siska,</p>
										<p>Seneng banget ketika tau kalian mau nikah. Wildan adalah salah satu sahabat terbaik. Dia tipe orang yang sangat sigap,dapat diandalkan,dan juga rajin banget. Tipe-tipe suami idaman banget lah. But not for me sih. Hehe. Karena ke wildan itu udh bukan nganggep cowo,tapi lebih kayak saudara. Dia itu salah satu yang bisa mengejar impian dengan semangat yang membara. Tapi juga orang yang siap sedia membantu orang yang memerlukan. Makanya ga salah deh siska milih wildan. Siska juga tipe yang emang bisa ngimbangin wildan. Cewe rajin dan seneng dandan ini. Cucok lah kalian. Duh kepanjangan nanti testimoni nya. Ga akan cukup satu halaman juga buat ngomongin ini. Tapi intinya semoga kalian bisa menjadi keluarga sakinnah mawaddah warrahmah Aamiin YRA. Keep humble and stay cool ya , kalian</p>
											<p>Dari orang keren yg pendiam dan pemalu se jagad raya</p>">
							<img src="images/home/friends/putri.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Putri Irma Bratawijaya K</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<li class="mix wildan">
						<a href="javascript:void(0)" data-largesrc="images/home/friends/mbak_oi.jpg" data-title="Qori Mauludiah" data-description="<p>Ga nyangka yaa kaliaaaan akhirnya sampe tahap ini => Nikaahhh, Yeaaah akhirnyaaaaa
											Artinya idan ama siska pasangan yang benar2 bisa saling melengkapi dan saling menguatkaan...
											Doa untuk sekarang=> yang lancar sampai hari H yaaaa
											Doa setelah akad nanti=> sing jadi keluarga sakinah mawardah dan warohmah...
											Langgeng sampe kakek nenek sampai maut memisahkan... *tsaaahh
											Sing jodoh dunia akhirat.. Pokoknya doa yang terbaik buat kalian yaaa.. mulai dari nambah berkah rezekinya, kesehatannya, dipermudah segala urusannya ke depan... sing jadi ibu & bapak yang the best buat anak2nyaa nanti.. aamiin, aamiin, aamiinnn Yaa Rabb...
											Hughug buat siskaaaaa
											</p>
											<p>-Dari mbak kalian yang bukan orang jawa tapi orang sunda-</p>">
							<img src="images/home/friends/mbak_oi.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Qori Mauludiah</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
				</ul> <!-- end og grid -->
			</div>  
		</section>  
		<!-- testimonial -->
		<section id="gallery">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						
						<div class="title text-center">
							<h2>Photo <span class="color">Gallery</span></h2>
							<div class="border"></div>
						</div>
						
						
					</div> 
				</div> 
			</div>	
	
			<div class="containerwow fadeInUp" data-wow-duration="500ms">
				<ul class="gallery-grid">
					<li><a href="images/home/gallery/fulls/1.jpg"><img class="img" src="images/home/gallery/thumbs/1.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/2.jpg"><img class="img" src="images/home/gallery/thumbs/2.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/3.jpg"><img class="img" src="images/home/gallery/thumbs/3.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/4.jpg"><img class="img" src="images/home/gallery/thumbs/4.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/5.jpg"><img class="img" src="images/home/gallery/thumbs/5.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/6.jpg"><img class="img" src="images/home/gallery/thumbs/6.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/7.jpg"><img class="img" src="images/home/gallery/thumbs/7.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
					<li><a href="images/home/gallery/fulls/8.jpg"><img class="img" src="images/home/gallery/thumbs/8.jpg" alt="<?php echo DEFAULT_IMG_ALT ?>"></a></li>
				</ul>
			</div>
		</section>   

		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row" data-wow-duration="500ms">
					<div class="col-lg-12">
						<!-- copyright -->
						<div class="copyright text-center">							
							<p>mrandmrsmuslim.com. Copyright &copy; 2017. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> 
				</div> 
			</div> 
		</footer>
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		

		<script src="<?php echo base_url('html/home/js/jquery-1.11.0.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.slitslider.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.ba-cond.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.parallax-1.1.3.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/owl.carousel.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.mixitup.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.nicescroll.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.appear.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/easyPieChart.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.easing-1.3.pack.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/tweetie.min.js')?>"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC3iodfURpRE81Y5Av6kOAj3fqeXOvgDgU&sensor=false"></script>
		<script src="<?php echo base_url('html/home/js/jquery.nav.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.sticky.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.countTo.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/wow.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.fitvids.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/jquery.poptrox.min.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/grid.js')?>"></script>
		<script src="<?php echo base_url('html/home/js/custom.js')?>"></script>


    </body>
</html>