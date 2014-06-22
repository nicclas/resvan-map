<?php

/* Load required lib files. */
session_start();
require_once('./twitteroauth/twitteroauth/twitteroauth.php');
require_once('./twitteroauth/config.php');

if(isset($_SESSION['access_token'])){

  /* Get user access tokens out of the session. */
  $access_token = $_SESSION['access_token'];
  
  /* If access tokens are not available redirect to connect page. */
  
  if (empty($access_token['oauth_token']) || empty($access_token['oauth_token_secret'])) {
    header('Location: http://resvan.com/map/twitteroauth/clearsessions.php');
  }
   
  /* Create a TwitterOauth object with consumer/user tokens. */
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
  
  /* If method is set change API call made. Test is called by default. */
  //  $reply = $connection->get('account/verify_credentials');
  //$jobj = $reply;
  //$jobj=json_decode($reply,true);

  $handle = $_SESSION['twitter_user'];




  include("../db_info.php");

  if(isset($_GET["d"])){
    $DAY = mysql_real_escape_string($_GET["d"]);
  }else{
    $DAY = "20131210";  // For debug only
  }

  
  $db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  
  $sql = "SELECT user_id, access_token FROM moves_twitter_token WHERE handle = '".$handle."' order by id desc limit 1";
  if(!$result = $db->query($sql)){
    die('There was an error running a MySQL query: '.$db->error);
  }
  if($row = $result->fetch_assoc()){
    $USER_ID = $row['user_id'];
    $ACCESS_TOKEN = $row['access_token'];
  }

  $sql = "SELECT storyline FROM moves_storyline WHERE user_id = '".$USER_ID."' AND day='".$DAY."'";
  if(!$result = $db->query($sql)){
    die('There was an error running a MySQL query: '.$db->error);
  }
  if($row = $result->fetch_assoc()){
    $story = $row['storyline'];
    print $story;
  }else{
    // Cache miss. Get data from Moves-app
    $url = "https://api.moves-app.com/api/v1/user/storyline/daily/".$DAY;
    $vars = "access_token=".$ACCESS_TOKEN."&trackPoints=true";
    
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt( $ch, CURLOPT_URL, $url."?".$vars);
    
    $story = curl_exec( $ch );


    $istory = $db->real_escape_string($story);
    
    //  echo $story;
    
    if(strlen($istory) > 100){
      // Insert in db only of a "real" storline, not only an error since we do not like to cache the error stories for e.g. future days.
      $sql="INSERT INTO moves_storyline (user_id, day, storyline, handle) VALUES ('".$USER_ID."','".$DAY."','".$istory."','".$handle."')";
      if(!$userresult = $db->query($sql)){
	die('There was an error running a MySQL INSERT: '.$db->error);
      }
    }
    print $story;
  }
}
?>
  
