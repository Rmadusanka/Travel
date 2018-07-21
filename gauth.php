<?php
session_start();

$conn=mysqli_connect("localhost","root","","travel");
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}

// Holds the Google application Client Id, Client Secret and Redirect Url
require_once('config/settings.php');

// Holds the various APIs involved as a PHP class. Download this class at the end of the tutorial
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

		// Access Tokem
		$access_token = $data['access_token'];
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($access_token);

        echo '<pre>';print_r($user_info); echo '</pre>';

		// Now that the user is logged in you may want to start some session variables
        $_SESSION['logged_in'] = $user_info;
        


		// You may now want to redirect the user to the home page of your website
		header('Location: createUser.php');
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

?>