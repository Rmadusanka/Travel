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
  .center {
      margin: auto;
  }

  p {
      color: rgba(255, 255, 255, 0.9);
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

  .back-of-inquiries {
    background: url(./images/banner9.jpg);
    position: fixed;
    width: 110%;
    height: 110%;
    z-index: -1;
    top:-5%;
    left: -5%;
    background-size: cover;
    filter: blur(50px);
  }

  .section-opa {
    padding: 2em !important;
    background: rgba(0,0,0,0.5);
    border-radius: 4px;
  }

</style>

<body class="subpage">

  <?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception; 

    // require './PHPMailer/get_0auth_token.php';

    require 'config/config.php';

    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //Load Composer's autoloader
        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);                             
        try {
            //Server settings
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'roshanmw91@gmail.com';
            $mail->Password = '912044475Vv/';
            $mail->SMTPSecure = 'tsl';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('roshanmw91@gmail.com', 'Mailer');
            $mail->addAddress('roshanmw88@gmail.com', 'Joe User');
            // $mail->addAddress('ellen@example.com');
            // $mail->addReplyTo('roshanmw88@gmail.com', 'Information');
            // $mail->addCC('maduraherath8@gmail.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
            $body = "
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
                                    <td>Message :</td>
                                    <td>".$message."</td>
                                </tr>
                            </table>
                            <p>Thank you.</p>
                        </body>
                    </html>
            ";
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $body;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script type=\"text/javascript\">
                            alert(\"Message Sent Successfully...\");
                            window.location = \"inquiries.php\"
                        </script>";
        } catch (Exception $e) {
            echo "<script type=\"text/javascript\">
                            alert(\"Message Could not be Sent Successfully...\");
                            window.location = \"inquiries.php\"
                        </script>";
        }

    }
  ?>

  <!-- Header -->
  <?php include "common/header.php"; ?>

    <!-- Nav -->
    <?php include "common/nav.php"; ?>

  <!-- Main -->
  <div class="back-of-inquiries"></div>
  <div id="main" class="container">
  <div class="6u$ 12u$(medium) center section-opa">
    <h3>Online Travel Inquiries</h3>
    <p>Send us a message. We will contact you soon</p>
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