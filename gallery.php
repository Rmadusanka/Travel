<?php 
  $conn=mysqli_connect("localhost","root","","travel");
  if(!$conn){
      echo "connection failed".mysqli_connect_error();
  }
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Travel in Sri Lanka</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/css/gallery.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

</head>

<style>
  /* body {
    background-image: url("./images/banner6.jpg") !important;
    background-size: cover;
  } */
  .back-of-inquiries {
    background: url(./images/banner2.jpg);
    position: fixed;
    width: 110%;
    height: 110%;
    z-index: -1;
    top:-5%;
    left: -5%;
    background-size: cover;
    filter: blur(50px);
  }
</style>

<body class="subpage">

  <!-- Header -->
  <header id="header" class="alt">
    <div class="logo">
      <a href="index.html">Travel
        <span>in Sri Lanka</span>
      </a>
    </div>
    <a href="#menu">
      <span>Menu</span>
    </a>
  </header>

  <!-- Nav -->
  <nav id="menu">
		<ul class="links">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="about.html">About Us</a>
			</li>
			<li>
				<a href="gallery.php">Gallery</a>
			</li>
			<li>
				<a href="inquiries.php">Inquiries</a>
			</li>
			<li>
				<a href="testimonials.php">Testimonials</a>
			</li>
		</ul>
	</nav>
  <div class="back-of-inquiries"></div>
  <!-- Main -->
  <div id="main" class="container">
    <section id="gallery">
      <div class="container">
        <div id="image-gallery">
          <div class="row">
            <?php 
              $directory = "./images/gallery";
              $images = glob($directory . "/*.jpg");
              
              foreach($images as $image)
              {              
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
              <div class="img-wrapper">
                <a href="<?php echo $image; ?>">
                  <img src="<?php echo $image; ?>" class="img-responsive">
                </a>
                <div class="img-overlay">
                  <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <?php 
              }
            ?>
          </div>
          <!-- End row -->
        </div>
        <!-- End image gallery -->
      </div>
      <!-- End container -->
    </section>
  </div>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.scrolly.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    // Gallery image hover
    // Gallery image hover
    $(".img-wrapper").hover(
      function () {
        $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
      }, function () {
        $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
      }
    );

    // Lightbox
    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");
    var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
    var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
    var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

    // Add overlay
    $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
    $("#gallery").append($overlay);

    // Hide overlay on default
    $overlay.hide();

    // When an image is clicked
    $(".img-overlay").click(function (event) {
      // Prevents default behavior
      event.preventDefault();
      // Adds href attribute to variable
      var imageLocation = $(this).prev().attr("href");
      // Add the image src to $image
      $image.attr("src", imageLocation);
      // Fade in the overlay
      $overlay.fadeIn("slow");
    });

    // When the overlay is clicked
    $overlay.click(function () {
      // Fade out the overlay
      $(this).fadeOut("slow");
    });

    // When next button is clicked
    $nextButton.click(function (event) {
      // Hide the current image
      $("#overlay img").hide();
      // Overlay image location
      var $currentImgSrc = $("#overlay img").attr("src");
      // Image with matching location of the overlay image
      var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
      // Finds the next image
      var $nextImg = $($currentImg.closest(".image").next().find("img"));
      // All of the images in the gallery
      var $images = $("#image-gallery img");
      // If there is a next image
      if ($nextImg.length > 0) {
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
      } else {
        // Otherwise fade in the first image
        $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
      }
      // Prevents overlay from being hidden
      event.stopPropagation();
    });

    // When previous button is clicked
    $prevButton.click(function (event) {
      // Hide the current image
      $("#overlay img").hide();
      // Overlay image location
      var $currentImgSrc = $("#overlay img").attr("src");
      // Image with matching location of the overlay image
      var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
      // Finds the next image
      var $nextImg = $($currentImg.closest(".image").prev().find("img"));
      // Fade in the next image
      $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
      // Prevents overlay from being hidden
      event.stopPropagation();
    });

    // When the exit button is clicked
    $exitButton.click(function () {
      // Fade out the overlay
      $("#overlay").fadeOut("slow");
    });
  </script>
</body>

</html>