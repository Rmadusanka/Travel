<?php 
    session_start();

    if (isset($_SESSION['logged_in'])){

        $user_info = $_SESSION['logged_in'];
        echo '<pre>';print_r($user_info); echo '</pre>';
        $conn=mysqli_connect("localhost","root","","travel");
        if(!$conn){
            echo "connection failed".mysqli_connect_error();
        }

        $sql = "SELECT oauth_uid FROM users WHERE oauth_uid='".$user_info['id']."'";
        $query = mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($query);
        if($rowcount){
            //Update user data if already exists
            $sql1 = "UPDATE users SET first_name = '".$user_info['name']['givenName']."', last_name = '".$user_info['name']['familyName']."', email = '".$user_info['emails'][0]['value']."', picture = '".$user_info['image']['url']."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_uid = '".$user_info['id']."'";
            if(mysqli_query($conn,$sql1)){
                header('Location: testimonials.php');
            }
        } else {
            echo 'ok';
            // $sql2 = "INSERT INTO users (oauth_uid, first_name, last_name, email, picture, created, modified) VALUES '".$user_info['id']."', '".$user_info['name']['givenName']."', '".$user_info['name']['familyName']."', '".$user_info['emails'][0]['value']."', '".$user_info['image']['url']."', '".date("Y-m-d")."', '".date("Y-m-d")."'";
            $sql2 = "INSERT INTO `users` (`oauth_uid`, `first_name`, `last_name`, `email`, `picture`, `created`, `modified`) VALUES ('".$user_info['id']."', '".$user_info['name']['givenName']."', '".$user_info['name']['familyName']."', '".$user_info['emails'][0]['value']."', '".$user_info['image']['url']."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
                if(mysqli_query($conn,$sql2)){
                    header('Location: testimonials.php');
                } else {
                    echo 'error';
                }
        }
    }
?>