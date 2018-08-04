<!DOCTYPE HTML>

<html>

<head>
    <title>Travel in Sri Lanka</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css"/>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href="./assets/css/crosal-thumbnail.css" rel="stylesheet" media="all">
    <meta name="theme-color" content="#212121">

    <script type="text/javascript">

        var myvid = document.getElementById('myVideo');

        myvid.addEventListener('ended', function(e) {
        // get the active source and the next video source.
        // I set it so if there's no next, it loops to the first one
        var activesource = document.querySelector("#myVideo source.active");
        var nextsource = document.querySelector("#myVideo source.active + source") || document.querySelector("#myvideo source:first-child");
        
        // deactivate current source, and activate next one
        activesource.className = "";
        nextsource.className = "active";
        
        // update the video source and play
        myvid.src = nextsource.src;
        myvid.play();
        
        });
        
	   </script>

</head>

<body>
<?php include "common/nav.php"; ?>
<!-- Header -->
<header id="header">
    <div class="logo">
        <a href="index.php">Vinlo
            <span>Tours</span>
        </a>
    </div>
    <a href="#menu">
        <span>Menu</span>
    </a>
</header>

<section id="banner" class="bg-img" data-bg="banner.jpg">
    <div class="gradiant-background"></div>
<<<<<<< HEAD
    <video autoplay muted id="myVideo">
=======
    <video autoplay muted loop id="myVideo">
        <source class="active" src="video/welcome_home.mp4" type="video/mp4" />
        <source src="video/sss.mp4" type="video/mp4" />
>>>>>>> f003eccf7c219170ff71d48b0d74d04678a1c05b
        Your browser does not support HTML5 video.
    </video>
    <div class="inner">
        <header>
            <h1 class="sri-lanka-text">Sri Lanka</h1>
            <h3 class="wonder-of-asia">The Wonder of Asia</h3>
        </header>
    </div>
    <a href="#one" class="more">Learn More</a>
</section>

<!-- One -->
<section id="one" class="wrapper post bg-img" data-bg="banner4.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>WELCOME TO VINLO TOURS</h2>
            </header>
            <div class="content">
                <p class="in-text">Vinlo Tours allows you to explore the tourism hotspots in Sri Lanka. We are proud to say that we are pioneers in travel and tourism industry with ever growing positively satisfied clientele and unforgettable tourism experience for you.</p>
            </div>
            <footer>
                <a href="welcome.php" class="button alt">See More</a>
            </footer>
        </article>
    </div>
    <a href="#two" class="more">Learn More</a>
</section>

<!-- Two -->
<section id="two" class="wrapper post bg-img" data-bg="banner3.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>Places to visit in Sri Lanka</h2>
            </header>
            <div class="content">
                <p class="in-text">Sri Lanka is rich with many wonderful travelling places. One can feel the luxuries
                    and different environmental conditions
                    in the country. Sri Lanka has a rich culture which is always focused on delivering the best
                    hospitality services.</p>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-centered">

                        <div id="carousel" class="carousel slide thumbnail-carousel" data-ride="carousel" data-type="multi"
                             data-interval="5000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner2.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner7.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner8.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner9.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner10.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="carousel-col">
                                        <img class="block img-responsive" src="images/banner5.jpg">
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <div class="left carousel-control">
                                <a href="#carousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="right carousel-control">
                                <a href="#carousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer>
                <a href="places.php" class="button alt">PLACES</a>
            </footer>
        </article>
    </div>
    <a href="#three" class="more">Learn More</a>
</section>

<!-- Three -->
<section id="three" class="wrapper post bg-img" data-bg="banner2.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>Our services</h2>
            </header>
            <div class="content text-center">
                <div class="row">
                    <div class="col col-md-4 col-sm-12 white-text main-col-header">
                        <img src="images/whale.png"/>
                        <h5>Whale Watching</h5>
                        <p>The Sri Lanka Navy's passenger craft set sail on a new journey at the launching of "whale
                            watching project" at port
                            of Galle.</p>
                    </div>
                    <div class="col col-md-4 col-sm-12 white-text main-col-header">
                        <img src="images/travel.png"/>
                        <h5>Traveling</h5>
                        <p>Sri Lanka (formerly Ceylon) is an island nation south of India in the Indian Ocean.</p>
                    </div>

                    <div class="col col-md-4 col-sm-12 white-text main-col-header">
                        <img src="images/hotel.png"/>
                        <h5>Hotels</h5>
                        <p>Enjoy Exclusive Offers with Best Price Guarantee on the Official Site! Legendary Hospitality.
                            Luxury Experience.</p>
					</div>
					
					<div class="col col-4 col-sm-4 white-text main-col-header" align="center">
							<a href="services.php" class="button alt">See More</a>
						</div>
						<div class="col col-4 col-sm-4 white-text main-col-header">
							<a href="places.php" class="button alt">See More</a>
						</div>
                </div>
            </div>
        </article>
    </div>
    <a href="#four" class="more">Learn More</a>
</section>

<!-- Four -->
<section id="four" class="wrapper post bg-img" data-bg="banner5.jpg">
    <div class="inner">
        <article class="box">
            <header>
                <h2>Vehicle Categories</h2>
            </header>
            <div class="content white-text">
                <div class="row">
                    <div class="col col-md-4 col-sm-12 ">
                        <img class="img-fluid" src="images/car_thumbnail.png">
                        <!--<h6 class="text-left">Vehicles</h6>-->
                        <hvr>

                            <p >KDH/Flat Super GL.</p>
                            <p >Hiace Highroof.</p>
                            <p >Axio hybrid</p>

                    </div>
                    <div class="col col-md-4 col-sm-12 ">
                        <img class="img-fluid" src="images/jeep_thumbnail.png">
                        <!--<h6 class="text-left">Vehicles</h6>-->

                            <p>Jeep (Sorento)</p>


                    </div>
                    <div class="col col-md-4 col-sm-12 ">
                        <img class="img-fluid" src="images/bus_thumbnail.png">

                            <p>Toyota Coaster</p>
                            <p>UD Nissan Bus</p>
                            <p>King Long Bus</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <a href="#footer" class="more">Learn More</a>
</section>


<!-- Footer -->
<footer id="footer">
    <div id="map"></div>
    <div class="inner">
        <ul class="icons">
            <li>
                <a href="#" class="icon round fa-twitter">
                    <span class="label">Twitter</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon round fa-facebook">
                    <span class="label">Facebook</span>
                </a>
            </li>
            <li>
                <a href="#" class="icon round fa-instagram">
                    <span class="label">Instagram</span>
                </a>
            </li>
        </ul>

        <div class="copyright">
            &copy; IlusoGames

        </div>

    </div>
</footer>
<script>
    
    var videoSource = new Array();
    videoSource[0]='video/1.mp4';
    videoSource[1]='video/2.mp4';
    videoSource[2]='video/3.mp4';
    var videoCount = videoSource.length;
    var vidIndex = 0;
    document.getElementById("myVideo").setAttribute("src",videoSource[0]);

 
    function videoPlay(videoNum)
    {
        document.getElementById("myVideo").setAttribute("src",videoSource[videoNum]);
        document.getElementById("myVideo").load();
        document.getElementById("myVideo").play();
    }

    document.getElementById('myVideo').addEventListener('ended',myHandler,false);

    function myHandler() {
        vidIndex = (vidIndex+1)%videoCount;
        videoPlay(vidIndex); 
    }
    
</script>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/crosal-thumbnails.js"></script>
<script>
// Initialize and add the map

function initMap() {
  // The location of Uluru
  var uluru = {lat: 6.9781805, lng: 79.9299431};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLKXB6XR6sh8b7WgMKNpy6Nh2StiOBqws&callback=initMap">
</script>

</body>

</html>