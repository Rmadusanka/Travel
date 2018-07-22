<?php
    include 'config/config.php';

    session_start();
    $checkusername = $_SESSION['username'];
    $session_sql= "SELECT * FROM user WHERE username = '".$checkusername."'";
    $query = mysqli_query($conn,$session_sql);
    $res = mysqli_fetch_array($query);
    $username = $res['username'];
    if (!$username){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

  <?php 
    include "commen/head.php";
  ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php 
    require "config/config.php";
    include "commen/navbars.php";

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $testimonial = $_POST['testimonial'];

      $file_name = $_FILES["image"]["name"];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_size =$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
          $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
          move_uploaded_file($file_tmp,"../images/testimonials/".$file_name);
          $sql = "INSERT INTO testimonial(name, image, testimonial) VALUES ('".$name."', '".$file_name."', '".$testimonial."')";
          if (mysqli_query($conn, $sql)) {
            echo "<script type=\"text/javascript\">
                            alert(\"Message Sent Successfully...\");
                            window.location = \"index.php\"
                        </script>";	
          }
      }else{
          print_r($errors);
      }

    }
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Testimonials</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-6 col-sm-8 mb-3">
          <form action="testimonials.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name" required>
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" id="image" name="image" aria-describedby="image" required>
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Testimonial</label>
              <textarea type="text" class="form-control" id="testimonial" name="testimonial" aria-describedby="testimonial" placeholder="Write a Testimonial" required></textarea>
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-info" id="submit" name="submit">
            </div>
          </form>
        </div>
      </div>
     
      <!-- Example DataTables Card-->
      <!-- <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div> -->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
