<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
  <title>Travel in Sri Lanka</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/css/gallery.css" />

</head>

<style>
  .center {
      margin: auto;
  }

  p {
      color: rgba(255, 255, 255, 0.5);
  }

  h3 {
      color: #fff;
  }

  input {
      color: #fff !important;
  }

  select {
        color: #fff;
  }

  select option {
        color: gray;
  }
  
  textarea {
    color: #fff;
  }
</style>

<body class="subpage">

  <?php 
    $conn=mysqli_connect("localhost","root","","travel");
    if(!$conn){
        echo "connection failed".mysqli_connect_error();
    }

    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $rates = $_POST['rates'];
        $message = $_POST['message'];

        echo $fname;
        echo $lname;
        echo $email;
        echo $rates;
        echo $message;

        // email config
        $to      = 'roshanmw91@gmail.com';
        $subject = 'Travel in Sri Lanka - Inquiries';
        $message = "
                    <html>
                        <head>
                            <title>Travel in Sri Lanka</title>
                        </head>
                        <body>
                            <p>Dear Jhon,</p>
                            <p>Thre have a inquiry from ".$fname." ".$lname.". </p>
                            <table>
                                <tr>
                                    <td>Email :</td>
                                    <td>".$email."</td>
                                </tr>
                                <tr>
                                    <td>Rate :</td>
                                    <td>".$rates."</td>
                                </tr>
                                <tr>
                                    <td>Message :</td>
                                    <td>".$message."</td>
                                </tr>
                            </table>
                            <p>Thank you.</p>
                        </body>
                    </html>
                    ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From:<roshanmw88@gmail.com>'. "\r\n";
        $headers .= 'Reply-to: '.$email;
        
        ini_set("SMTP","smtp.gmail.com");
        ini_set("smtp_port","587");
        // ini_set("SMTP","ssl://smtp.gmail.com");
        // ini_set("smtp_port","465");
        ini_set('sendmail_from', 'roshanmw88@gmail.com');

        if( mail($to,$subject,$message,$headers) ) {
            echo '<script>alert("Email Send, Thank you!"); </script>';
        } else {
            echo '<script>alert("Email not Send, Try Again!"); </script>';
        }
    }
  ?>

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
				<a href="gallery.html">Gallery</a>
			</li>
			<li>
				<a href="inquiries.php">Inquiries</a>
			</li>
		</ul>
	</nav>

  <!-- Main -->
  <div id="main" class="container">
  <div class="6u$ 12u$(medium) center">
    <h3>Online Travel Inquiries</h3>
    <p>Please Fill out the Online Inquiry Form or Call</p>
    <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" name="fname" id="name" value="" placeholder="First Name" required />
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="text" name="lname" id="lname" value="" placeholder="Last Name" required />
            </div>
            <div class="12u$">
                <input type="email" name="email" id="email" value="" placeholder="Email Address" required />
            </div>
            <!-- Break -->
            <!-- <div class="12u$">
                <div class="select-wrapper">
                    <select name="category" id="category">
                        <option value="">- Category -</option>
                        <option value="1">Manufacturing</option>
                        <option value="1">Shipping</option>
                        <option value="1">Administration</option>
                        <option value="1">Human Resources</option>
                    </select>
                </div>
            </div> -->
            <!-- Break -->
            <div class="12u$">
                <p>Ratings</p>
            </div>
            <div class="2u 12u$(small)">
                <input type="radio" id="Very Bad" value="Very Bad" name="rates">
                <label for="Very Bad">1</label>
            </div>
            <div class="2u 12u$(small)">
                <input type="radio" id="Bad" value="Bad" name="rates">
                <label for="Bad">2</label>
            </div>
            <div class="2u$ 12u$(small)">
                <input type="radio" id="Average" value="Average" name="rates" checked    >
                <label for="Average">3</label>
            </div>
            <div class="2u 12u$(small)">
                <input type="radio" id="Good" value="Good" name="rates">
                <label for="Good">4</label>
            </div>
            <div class="2u$ 12u$(small)">
                <input type="radio" id="Very Good" value="Very Good" name="rates">
                <label for="Very Good">5</label>
            </div>
            <!-- Break -->
            <!-- <div class="6u 12u$(small)">
                <input type="checkbox" id="copy" name="copy">
                <label for="copy">Email me a copy of this message</label>
            </div>
            <div class="6u$ 12u$(small)">
                <input type="checkbox" id="human" name="human" checked>
                <label for="human">I am a human and not a robot</label>
            </div> -->
            <!-- Break -->
            <div class="12u$">
                <p>Inquiry</p>
            </div>
            <div class="12u$">
                <textarea name="message" id="message" placeholder="Enter your inquiry" rows="6" required></textarea>
            </div>
            <!-- Break -->
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" name="submit" /></li>
                    <li><input type="reset" value="Reset" class="alt" /></li>
                </ul>
            </div>
        </div>
    </form>
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