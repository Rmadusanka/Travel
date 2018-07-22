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

    .place-header h2 {
        padding: 15px;
    }

    .index-content a:hover{
    color:black;
    text-decoration:none;
}
.index-content{
    margin-bottom:20px;
    padding:0px;
    
}
.index-content .row{
    margin-top:20px;
}
.index-content a{
    color: black;
}
.index-content .card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
    margin-bottom: 20px;
}
.index-content .card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}
.index-content .card img{
    width:100%;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.index-content .card h4{
    margin:20px;
}
.index-content .card p{
    margin:20px;
    opacity: 0.65;
}
.index-content .blue-button{
    width: 100px;
    -webkit-transition: background-color 1s , color 1s; /* For Safari 3.1 to 6.0 */
    transition: background-color 1s , color 1s;
    min-height: 20px;
    background-color: #002E5B;
    color: #ffffff;
    border-radius: 4px;
    text-align: center;
    font-weight: lighter;
    margin: 0px 20px 15px 20px;
    padding: 5px 0px;
    display: inline-block;
}
.index-content .blue-button:hover{
    background-color: #dadada;
    color: #002E5B;
}
@media (max-width: 768px) {

    .index-content .col-lg-4 {
        margin-top: 20px;
    }
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
        padding: 0;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 4px;
    }
</style>

<body class="subpage">
    <div class="bg-ground"></div>
    <!-- Header -->
    <?php include "common/header.php"; ?>

    <!-- Nav -->
    <?php include "common/nav.php"; ?>

    <video autoplay muted loop id="myVideo-about">
        <source src="video/travel.mp4" type="video/mp4"> Your browser does not support HTML5 video.
    </video>
    <!-- Main -->
    <div class="container">
        <br>
        <div class="row row-margin-bottom back-of-place">
            <header class="col-md-12 place-header">
                <h2>HOTELS IN SRI LANKA</a>
                </h2>
                <br>
            </header>
            <div class="index-content">
                <div class="container">
                    <?php 
						$sql = "SELECT * FROM hotel";
						$query = mysqli_query($conn, $sql);
						while ($res = mysqli_fetch_array($query)) {
					?>
                    <a href="<?php echo $res['website']; ?>">
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="images/hotels/<?php echo $res['image']; ?>">
                                <h4><?php echo $res['hotel']; ?></h4>
                                <p> <?php echo $res['description']; ?> </p>
                                <p> <?php echo $res['village']; ?></p>
                                <p> Style - <span><?php echo $res['category']; ?></span></p>
                                <a href="<?php echo $res['website']; ?>" class="blue-button">Read More</a>
                            </div>
                        </div>
                    </a>
                    <?php
						}
					?>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>

</html>