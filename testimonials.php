<?php 
	session_start();
	require 'config/config.php';
  	require_once('config/settings.php');
	$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Generic - Road Trip by TEMPLATED</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <style>

@import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

section{
    background:#fbfbfb;
}
h2 {
    color: #4C4C4C;
    word-spacing: 5px;
    font-size: 30px;
    font-weight: 700;
    font-family: 'Raleway', sans-serif;
}

#testimonial{
   padding:20px 0px;
}

#testimonial .fa.fa-quote-right{
	color:#5db4c0;
	font-size:30px;
}

#testimonial  p{
    font-family: 'Raleway', sans-serif;
    margin-bottom:20px;
	margin-top:20px;
	color: #fff;
}

#testimonial img{
    width: 150px; 
    height: 150px; 
    margin: 0 auto;
    border-radius: 50%;
    border: 1px solid #5db4c0; 
}

#testimonial .carousel-indicators  li {
    background-color: #5db4c0;
    height: 13px;
    width: 13px;
    margin: 5px;
}

#testimonial .carousel-indicators li.active {
    background-color: #888383;
}

#testimonial .carousel-indicators {
    bottom: -50px;
}

.testimoni-name {
	color: #fff;
}

/* comments */
* {
 	margin: 0;
 	padding: 0;
 	-webkit-box-sizing: border-box;
 	-moz-box-sizing: border-box;
 	box-sizing: border-box;
 }

 a {
 	color: #03658c;
 	text-decoration: none;
 }

ul {
	list-style-type: none;
}

body {
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
	background: #dee1e3;
}

/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 20px auto 15px;
	width: 768px;
	background: rgba(0,0,0,0.5);
    padding: 10px;
    border-radius: 4px;
}

.comments-container h1 {
	font-size: 36px;
	color: #eaeaea;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 88px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: relative;
	z-index: 99;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 650px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 610px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: #A6A6A6;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}

.back-of-testimonials {
    background: url(./images/banner10.jpg);
    position: fixed;
    width: 110%;
    height: 110%;
	z-index: -1;
	top:-5%;
    left: -5%;
    background-size: cover;
    filter: blur(30px);
  }

.testimonial-header {
	color: #fff;
}

.opacity-back {
	background: rgba(0,0,0,0.5);
	border-radius: 4px;
	padding-bottom: 50px;
}

.btn-google {
	background: #DD4B39;
	color: #ffff;
	margin-left: 20px;
    margin-top: 10px;
}

.btn-google:hover {
	background: #c74534;
	color: #ffff;
}

.comment-textarea::placeholder {
	color: gray !important;
}

    </style>
</head>

<body class="subpage" style="background:none !important; background-color:transparent !important;">

	<!-- Header -->
	<?php include "common/header.php"; ?>

	<!-- Nav -->
	<?php include "common/nav.php"; ?>

    <div class="back-of-testimonials"></div>
    <section id="testimonial" style="background:none !important; background-color:transparent !important;">
    <div class="container">
        <div class="row">
          
            <div class="col-lg-8 col-lg-offset-2 col-xs-12 text-center opacity-back"> 
                    
                        <h2 class="testimonial-header"><span class="ion-minus"></span> Testimonials <span class="ion-minus"></span></h2>
                        <i class="fa fa-quote-right"></i>

                        <div id="slider" class="carousel slide" data-ride="carousel">
                        
                            <ol class="carousel-indicators">
								<?php 
									$no_li = 0;
									$sql1 = "SELECT * FROM testimonial";
									$query1 = mysqli_query($conn, $sql1);
									while ($res1 = mysqli_fetch_array($query1)) {
								?>
                                <li data-target="#slider" data-slide-to="<?php echo $no_li; ?>" <?php if ($no_li==0) { echo 'class="active"'; } ?> ></li>
								<?php 
										$no_li = 1 + $no_li;
									}
								?>
                            </ol>
                            
                            <div class="carousel-inner">

								<?php 
									$no = 0;
									$sql = "SELECT * FROM testimonial";
									$query = mysqli_query($conn, $sql);
									while ($res = mysqli_fetch_array($query)) {
								?>
                                <div class="item <?php if ($no==0) { echo "active"; } ?>">
                                    <p><?php echo $res['testimonial']; ?></p>
                                    <img src="./images/testimonials/<?php echo $res['image']; ?>">
                                    <h5 class="testimoni-name" ><?php echo $res['name']; ?></h5>
                                </div>
								<?php 
										$no = 1 + $no;
									}
								?>
								
                            </div>  <!-- carousel-inner -->
							
                        </div>  <!-- carousel slide -->
                        
            </div>
            
       </div>
   </div>    
</section>
<!-- Contenedor Principal -->
<div class="comments-container">
		<h1>Comentarios</h1>
		<?php if (!isset($_SESSION['logged_in'])) { ?>
		<a href="<?= $login_url ?>" class="btn btn-google" ><span class="fa fa-google"></span> Sign in with Google</a>
		<?php } ?>
		<ul id="comments-list" class="comments-list">
			<?php if (isset($_SESSION['logged_in'])) { ?>
			<li id="commentArea">
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="<?php echo $_SESSION['logged_in']['image']['url']; ?>" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href="http://creaticode.com/blog"><?php echo $_SESSION['logged_in']['name']['givenName']; ?> <?php echo $_SESSION['logged_in']['name']['familyName']; ?></a></h6>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							<textarea class="comment-textarea" name="publicComment" row="2" placeholder="Enter your comment here..." ></textarea>
						</div>
					</div>
				</div>
			</li>
			<?php } ?>
			<!-- <li>
				<div class="comment-main-level">
					<div class="comment-avatar"><img src="https://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
			</li> -->
			<?php
				$sql = "SELECT * FROM comments ORDER BY id DESC";
				$query = mysqli_query($conn, $sql);
				while ($res = mysqli_fetch_array($query)) {
					$sql1 = "SELECT * FROM users WHERE oauth_uid='".$res['user_id']."'";
					$query1 = mysqli_query($conn, $sql1);
					if ($res1 = mysqli_fetch_array($query1)) {
			?>
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="<?php echo $res1['picture'] ?>" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href=""><?php echo $res1['first_name'] ?> <?php echo $res1['last_name'] ?></a></h6>
							<span><?php echo $res['create_at'] ?></span>
							<!-- <i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i> -->
						</div>
						<div class="comment-content">
						<?php echo $res['comment'] ?>
						</div>
					</div>
				</div>
			</li>
			<?php
					} 
				} 
			?>

		</ul>
	</div>


<!-- Footer -->
	<footer id="footer">
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

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		$(".comment-textarea").keypress(function(e) {
			if (e.which == 13) {
				var comment = $(this).val();
				console.log(comment);
				$.ajax({
					method: "POST",
					url: "comment.php",
					data: { comment: comment },
					dataType: 'json',
					success: function(data){
						$( "#commentArea" ).after(data);
						console.log(data);
						$(".comment-textarea").val("");
					},
					error: function (error) {
						console.log(error);
					}
				})
			}
		})
	</script>

</body>

</html>