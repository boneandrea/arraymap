<?php
session_start();
include("util.php");
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title>ArrayMap合同会社:小規模システムに特化した開発会社</title>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	  <link rel="stylesheet" href="css/fontawesome-all.min.css">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	  <link rel="stylesheet" href="css/tooplate-style.css">

	  <script>
		 const renderPage = true;

	   if(navigator.userAgent.indexOf('MSIE')!==-1
		    || navigator.appVersion.indexOf('Trident/') > 0){
   		   /* Microsoft Internet Explorer detected in. */
   		   alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		   renderPage = false;
	   }
	  </script>
  </head>

  <body>
	  <!-- Loader -->
	  <div id="loader-wrapper">
		  <div id="loader"></div>
		  <div class="loader-section section-left"></div>
		  <div class="loader-section section-right"></div>
	  </div>

	  <!-- Page Content -->
	  <div class="container-fluid tm-main">
		  <div class="row tm-main-row">

			  <!-- Sidebar -->
			  <div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				  <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				  <div class="inner">
					  <nav id="tmMainNav" class="tm-main-nav">
						  <ul>
							  <li>
								  <a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
									  <i class="fas fa-home tm-nav-fa-icon"></i>
									  <span>Introduction</span>
								  </a>
							  </li>
							  <li>
								  <a href="#company" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
									  <i class="fas fa-users tm-nav-fa-icon"></i>
									  <span>Our Company</span>
								  </a>
							  </li>
							  <li>
								  <a href="#contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
									  <i class="fas fa-comments tm-nav-fa-icon"></i>
									  <span>Contact Us</span>
								  </a>
							  </li>
							  <li>
								  <a href="#about" class="scrolly" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-5">
                    <i class="fas fa-user tm-nav-fa-icon"></i>
									  <span>About Us</span>
								  </a>
							  </li>
						  </ul>
					  </nav>
				  </div>
			  </div>

			  <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">ArrayMap合同会社</h1></header>
							<p class="mb-5 tm-font-big">インターネット上で、役立つシステムはまだまだあるはず。まだ見ぬ誰かを楽にするために、ゴールなきサービスを日々追求します。</p>
							<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Continue...</a>
							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>

					<!-- section 2 -->
          <!--
					     <section id="tm-section-2" class="tm-section tm-section-carousel">
						   <div>
							 <header class="mb-4"><h2 class="tm-text-shadow">Our Products</h2></header>
							 <div class="tm-img-container">
							 <div class="tm-img-slider">
							 <a href="img/gallery-img-01.jpg" class="tm-slider-img"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="img-fluid"></a>
							 <a href="img/gallery-img-02.jpg" class="tm-slider-img"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid"></a>
							 <a href="img/gallery-img-03.jpg" class="tm-slider-img"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid"></a>
							 <a href="img/gallery-img-04.jpg" class="tm-slider-img"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid"></a>
							 <a href="img/gallery-img-05.jpg" class="tm-slider-img"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid"></a>
							 <a href="img/gallery-img-06.jpg" class="tm-slider-img"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid"></a>
							 </div>
							 </div>
						   </div>
					     </section>
          -->
					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section">
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">Our Company</h2></header>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fas fa-code tm-icon-circled tm-icon-media tm-sub-nav" data-nav-link="#tmNavLink2" data-page="#tm-section-6" data-bg-img="bg_05.jpg"></i>
									<div class="media-body">
										<h3>Webシステム開発</h3>
										<p>PHP, nodejs, Vue, MySQL ...技術は問いません。<br>全ては誰かを楽にするため、楽しませるため。</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fas fa-camera fa-sm tm-icon-circled tm-icon-media tm-sub-nav" data-nav-link="#tmNavLink2" data-page="#tm-section-7" data-bg-img="bg_05.jpg"></i>
                  <!--
									     <i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>
                  -->
									<div class="media-body">
										<h3>ハードウェア関連システム開発</h3>
										<p>RaspberryPiおよび関連装置を用いたシステム開発、カメラを用いた監視などを得意としています。</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fas fa-mobile-alt mr-4 tm-icon-circled tm-icon-media tm-sub-nav" data-nav-link="#tmNavLink2" data-page="#tm-section-8" data-bg-img="bg_05.jpg"></i>
									<div class="media-body">
										<h3>モバイルアプリ開発<br>デスクトップアプリ開発</h3>
										<p>主にAndroid, Electronを扱います。</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
                  <i class="fas fa-wrench mr-4 tm-icon-circled tm-icon-media tm-sub-nav" data-nav-link="#tmNavLink2" data-page="#tm-section-9" data-bg-img="bg_05.jpg"></i>
									<div class="media-body">
										<h3>その他</h3>
										<p>小規模で小回りの利く開発、請け負います。</p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Contact Us</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<form action="mail.php" method="post" class="contact-form">
											<div class="form-group">
												<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required>
											</div>
											<div class="form-group">
												<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required>
											</div>
											<div class="form-group">
												<textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
											</div>
											<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="tm-address-box">
										<p>「こんなことできないかな？」<br>「面倒なことをとにかくシステムに任せたい」<br>などありましたらご相談ください。<br>問題分析からお手伝いいたします。</p>
										<address>
											143-0027 東京都大田区中馬込<br>3-2-3-302
										</address>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- section 4 -->
					<section id="tm-section-5" class="tm-section">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">ArrayMap合同会社</h1></header>
							<p class="mb-5 tm-font-big">代表社員　田中　拓也</p>
							<p class="mb-5 tm-font-normal">メーカー系制御プログラマからWeb業界へ転身。<br>フリーランスとして各種業務アプリ、セキュリティ関連サイト、ITナレッジサイトなどの構築と運用を手がける。</p>
							<p class="mb-5 tm-font-big">沿革</p>
							<p class="mb-5 tm-font-normal">2005.02.01 個人事業開始</p>
							<p class="mb-5 tm-font-normal">2020.11.20 ArrayMap合同会社設立</p>
							<p class="mb-5 tm-font-big">主要取引先</p>
							<p class="mb-5 tm-font-normal">アグスネット株式会社、AIクレジット株式会社</p>
							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>
          <?=readSectionTemplates()?>
        </div>	<!-- .tm-content -->
				<footer class="footer-link">
					<p class="tm-copyright-text">Copyright &copy; 2020 ArrayMap LLC.</p>
				</footer>
			</div>	<!-- row -->
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

		<script>

		 const sidebarVisible = false;
		 let currentPageID = "#tm-section-1";

		 // Setup Carousel
		 function setupCarousel() {

			   // If current page isn't Carousel page, don't do anything.
			   if($('#tm-section-2').css('display') == "none") {
			   }
			   else {	// If current page is Carousel page, set up the Carousel.

				     const slider = $('.tm-img-slider');
				     const windowWidth = $(window).width();

				     if (slider.hasClass('slick-initialized')) {
					       slider.slick('destroy');
				     }

				     if(windowWidth < 640) {
					       slider.slick({
	              		 dots: true,
	              		 infinite: false,
	              		 slidesToShow: 1,
	              		 slidesToScroll: 1
	               });
				     }
				     else if(windowWidth < 992) {
					       slider.slick({
	              		 dots: true,
	              		 infinite: false,
	              		 slidesToShow: 2,
	              		 slidesToScroll: 1
	               });
				     }
				     else {
					       // Slick carousel
	               slider.slick({
	              		 dots: true,
	              		 infinite: false,
	              		 slidesToShow: 3,
	              		 slidesToScroll: 2
	               });
				     }

				     // Init Magnific Popup
				     $('.tm-img-slider').magnificPopup({
				         delegate: 'a', // child items selector, by clicking on it popup will open
				         type: 'image',
				         gallery: {enabled:true}
				         // other options
				     });
      	 }
  	 }

  	 // Setup Nav
  	 function setupNav() {

         const _changePage=function(self){

		    	   const currentNavItem = $(self);
		    	   changePage(currentNavItem);

		    	   setupCarousel();
		    	   setupFooter();

		    	   // Hide the nav on mobile
		    	   $("#tmSideBar").removeClass("show");
		     };

  			 // Add Event Listener to each Nav item
	     	 $(".tm-main-nav a").click(function(e){
	     		   e.preventDefault();
             _changePage(this);
         });
	     	 $(".tm-sub-nav").click(function(e){
	     		   e.preventDefault();
             _changePage(this);
         });
  	 }

  	 function changePage(currentNavItem) {
         console.log(currentNavItem);
  			 // Update Nav items
  			 $(".tm-main-nav a").removeClass("active");
     		 currentNavItem.addClass("active");

	    	 $(currentPageID).hide();

	    	 // Show current page
	    	 currentPageID = currentNavItem.data("page");
	    	 $(currentPageID).fadeIn(1000);

	    	 // Change background image
	    	 const bgImg = currentNavItem.data("bgImg");
	    	 $.backstretch("img/" + bgImg);
  	 }

  	 // Setup Nav Toggle Button
  	 function setupNavToggle() {

			   $("#tmMainNavToggle").on("click", function(){
				     $(".sidebar").toggleClass("show");
			   });
  	 }

  	 // If there is enough room, stick the footer at the bottom of page content.
  	 // If not, place it after the page content
  	 function setupFooter() {

  			 const padding = 100;
  			 const footerPadding = 40;
  			 const mainContent = $("section"+currentPageID);
  			 const mainContentHeight = mainContent.outerHeight(true);
  			 const footer = $(".footer-link");
  			 const footerHeight = footer.outerHeight(true);
  			 const totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			 const windowHeight = $(window).height();

  			 if(totalPageHeight > windowHeight){
  				   $(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				   footer.css("bottom", footerHeight + "px");
  			 }
  			 else {
  				   $(".tm-content").css("margin-bottom", "0");
  				   footer.css("bottom", "20px");
  			 }
  	 }

  	 // Everything is loaded including images.
     $(window).on("load", function(){

      	 // Render the page on modern browser only.
      	 if(renderPage) {
				     // Remove loader
		      	 $('body').addClass('loaded');

		      	 // Page transition
		      	 const allPages = $(".tm-section");

		      	 // Handle click of "Continue", which changes to next page
		      	 // The link contains data-nav-link attribute, which holds the nav item ID
		      	 // Nav item ID is then used to access and trigger click on the corresponding nav item
		      	 const linkToAnotherPage = $("a.tm-btn[data-nav-link]");

			       if(linkToAnotherPage != null) {

			    	     linkToAnotherPage.on("click", function(){
			    		       const navItemToHighlight = linkToAnotherPage.data("navLink");
			    		       $("a" + navItemToHighlight).click();
			    	     });
			       }

		      	 // Hide all pages
		      	 allPages.hide();

		      	 $("#tm-section-1").fadeIn();

		     	   // Set up background first page
		     	   const bgImg = $("#tmNavLink1").data("bgImg");

		     	   $.backstretch("img/" + bgImg, {fade: 500});

		     	   // Setup Carousel, Nav, and Nav Toggle
			       setupCarousel();
			       setupNav();
			       setupNavToggle();
			       setupFooter();

			       // Resize Carousel upon window resize
			       $(window).resize(function() {
			    	     setupCarousel();
			    	     setupFooter();
			       });
      	 }
		 });

		</script>
	</body>
</html>