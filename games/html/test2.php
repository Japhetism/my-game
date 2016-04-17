<?php 
$code = "";
$servername = "localhost";
$user = "root";
$pass ="";
$dbname = "social_testing";

$conn = mysqli_connect($servername, $user, $pass, $dbname);

if(!$conn){
	echo "Unable to connect to the database";
}

/*$app_id = "862658733860040";
 
$app_secret = "494fc4d8529f487449d52e1e652a4569";
 
$my_url = "http://localhost/games/html/test1.php";
 
$token_url = "https://graph.facebook.com/oauth/access_token?"
 
. "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
 
. "&client_secret=" . $app_secret . "&code=" . $code . "&scope=publish_actions,email";
 

 
$response = @file_get_contents($token_url);
 
$params = null;
 
parse_str($response, $params);



$graph_url = "https://graph.facebook.com/me?access_token="
 
. $params['access_token'];
 

 
$user = json_decode(file_get_contents($graph_url));
 
$username = $user->username;
 
$email = $user->email;
 
$facebook_id = $user->id;
*/

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<label>Learning Signup on a platform using social media such as facebook</label><p> 
<a href="https://www.facebook.com/dialog/oauth?client_id=862658733860040&redirect_uri=http://localhost/games/html/test1.php&scope=publish_actions,email" title="Signup with facebook">
 
<button>Signup with facebook</button>
 
</a>


</body>
</html>