<?php 
  require 'config/config.php';
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
    body {
        padding: 20px;
        font-family: 'Open Sans', sans-serif;
        background-color: #f7f7f7;
    }

    .lib-panel {
        margin-bottom: 20Px;
    }

    .lib-panel img {
        width: 100%;
        background-color: transparent;
        border-radius: 4px;
    }

    .lib-panel .row,
    .lib-panel .col-md-6 {
        padding: 0;
        background-color: #FFFFFF;
        border-radius: 5px;
    }


    .lib-panel .lib-row {
        padding: 0 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header {
        font-size: 20px;
        padding: 10px 20px 0 20px;
    }

    .lib-panel .lib-row.lib-header .lib-header-seperator {
        height: 2px;
        width: 26px;
        background-color: #d9d9d9;
        margin: 7px 0 7px 0;
    }

    .lib-panel .lib-row.lib-desc {
        position: relative;
        height: 100%;
        display: block;
        font-size: 13px;
    }

    .lib-panel .lib-row.lib-desc a {
        position: absolute;
        width: 100%;
        bottom: 10px;
        left: 20px;
    }

    .row-margin-bottom {
        margin-bottom: 20px;
    }

    .box-shadow {
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, .10);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .10);
    }

    .no-padding {
        padding: 0;
        margin-left: 4.15%;
    }

    #myVideo-about {
        z-index: -1;
    }

    #myVideo-about {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    .back-of-place {
        padding: 40px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 4px;
    }
</style>

<body class="subpage">
    <div class="bg-ground" style="margin-left: -20px;" ></div>
    <!-- Header -->
    <?php include "common/header.php"; ?>

    <!-- Nav -->
    <?php include "common/nav.php"; ?>
    <!-- Main -->
    <div class="container">
        <br>
        <div class="row row-margin-bottom back-of-place">
            <header class="col-md-12 place-header">
                <h2>PLACES TO VISIT IN
                    <a href="srilanka">SRI LANKA</a>
                </h2>
                <br>
            </header>
            <?php 
				$sql = "SELECT * FROM place";
				$query = mysqli_query($conn, $sql);
				while ($res = mysqli_fetch_array($query)) {
			?>
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="images/places/<?php echo $res['image']; ?>">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <?php echo $res['place']; ?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <?php echo $res['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
				}
			?>
        </div>
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