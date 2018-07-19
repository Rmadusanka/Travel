<?php 
    session_start();

    $conn=mysqli_connect("localhost","root","","travel");
    if(!$conn){
        echo "connection failed".mysqli_connect_error();
    }

    if (isset($_SESSION['logged_in']) AND isset($_POST['comment']) ) {
        $userid = $_SESSION['logged_in']['id'];
        $fname = $_SESSION['logged_in']['name']['givenName'];
        $lname = $_SESSION['logged_in']['name']['familyName'];
        $image = $_SESSION['logged_in']['image']['url'];
        $comment = $_POST['comment'];
        $createat = date('Y-m-d H:i:s');
        $data = '';
        $sql = "INSERT INTO `comments` ( `user_id`, `comment`, `create_at`) VALUES ('".$userid."','".$comment."','".$createat."')";
        if(mysqli_query($conn,$sql)){
            $data = '<li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="'.$image.'" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="">'.$fname.' '.$lname.'</a></h6>
                                    <span>'.$createat.'</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    '.$comment.'
                                </div>
                            </div>
                        </div>
                    </li>';
            
        } else {
            $data = 'fail2';
        }

    } else {
        $data = 'fail1';
    }
    echo json_encode($data);
?>