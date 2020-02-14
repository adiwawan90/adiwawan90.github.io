<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
$judul = "Nur Rohmat & Anake wong's Wedding"; // Judul / title undangan
$nama = "Rohmat & Siapa";
$gambar = "https://lasmo.id/demo/wedding/images/gambar.jpg"; // gambar yang muncul saat undangan di share di medsos
$url ="https://lasmo.id/demo/wedding";
$facebook_App_ID = ""; // App ID untuk komentar facebook
$google_key = ""; // key google api untuk menampilkan map
// untuk pengaturan lokasi di map ada di file js/google_map.js
?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$judul;?></title>
	<link rel="shortcut icon" href="images/intro-heart.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$judul;?>" />
	<meta name="keywords" content="<?=$judul;?>" />
	<meta name="author" content="<?=$judul;?>" />

  	<meta property="og:title" content="<?=$judul;?>"/>
	<meta property="og:image" content="<?=$gambar;?>"/>
	<meta property="og:url" content="<?=$url;?>"/>
	<meta property="og:site_name" content="Wedding Invitation"/>
	<meta property="og:description" content="We invited you to celebrate our wedding"/>
	<meta name="twitter:title" content="<?=$judul;?>" />
	<meta name="twitter:image" content="<?=$gambar;?>" />
	<meta name="twitter:url" content="<?=$url;?>" />
	<meta name="twitter:card" content="summary_large_image" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11&appId=<?php echo "$facebook_App_ID";?>&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="fh5co-nav" >
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Wedding<strong>.</strong></a></div>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/cover.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?=$nama;?></h1>
							<h2>We Are Getting Married</h2>
							<div class="hati simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>February 11th, 2021 Bubat, Majapahit</h3>
					<p>We invited you to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/pria.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Nur Rohmat</h3>
						<p>Aku ingin mencintaimu dengan sederhana, dengan isyarat yang tak sempat diucapkan awan kepada hujan yang menjadikannya tiada. (Sapardi Djoko Damono)</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/wanita.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Anake wong</h3>
						<p>Aku memandangimu tanpa perlu menatap. Aku mendengarmu tanpa perlu alat. Aku menemui tanpa perlu hadir. Aku mencintaimu tanpa perlu apa-apa, karena kini kumiliki segalanya. (Dee Lestari – Rectoverso)</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/bg.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Main Ceremony</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>09:00 AM</span>
										<span>-</span>
										<span>10:00 AM</span>
										
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Majapahit</span>
										<span>11 February</span>
										<span>2021</span>
									</div>
									<p>Di Kediaman Mempelai pria. Bubat, Majapahit</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Party</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>11:00 AM</span>
										<span>-</span>
										<span>Selesai</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Majapahit</span>
										<span>11 February</span>
										<span>2021</span>
									</div>
									<p>Di Kediaman Mempelai pria. Bubat, Majapahit</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story" name="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>We Love Each Other</span>
					<h2>Our Story</h2>
					<p>(Sangat) Sedikit Cerita Dari Kami.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/firstmeet.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First We Meet</h3>
									<span class="date">2014</span>
								</div>
								<div class="timeline-body">
									<p>Bertemu di warung kopi . . . :D</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/firstdate.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">First Date</h3>
									<span class="date">2015</span>
								</div>
								<div class="timeline-body">
									<p>Karena sama-sama suka ngopi, jadi jalan pertamanya ya ngopi di deket taman Ayodya</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/relationships.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">In A Relationship</h3>
									<span class="date">July 13, 2015</span>
								</div>
								<div class="timeline-body">
									<p>Jadian</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
<div id="map" class="fh5co-map"></div>
	
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="wrap-testimony">
					<div class="fb-comments" data-href="<?=$url;?>" data-numposts="15" data-order-by="reverse_time"></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/share?url=<?=$url;?>" target="_BLANK"><i class="icon-twitter"></i></a></li>
							<li><a href="http://www.facebook.com/share.php?u=<?=$url;?>&title=<?=$judul;?>&image=<?=$gambar;?>&description=We invited you to celebrate our wedding" target="_BLANK"><i class="icon-facebook"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo "$google_key";?>&sensor=false"></script>

    <script src="js/gmaps.js"></script>
	<script src="js/google_map.js"></script>
	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
  
simplyCountdown('.simply-countdown-one', {
            year: 2020, // required
            month: 2, // required
            day: 11, // required
            hours: 10, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: 'day',
                hours: 'hour',
                minutes: 'minute',
                seconds: 'second',
                pluralLetter: 's'
            },
            plural: true, //use plurals
            inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
            inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
            // in case of inline set to false
            enableUtc: false,
            onEnd: function () {
                // your code
                return;
            },
            refresh: 1000, //default refresh every 1s
            sectionClass: 'simply-section', //section css class
            amountClass: 'simply-amount', // amount css class
            wordClass: 'simply-word' // word css class
    });
    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>

