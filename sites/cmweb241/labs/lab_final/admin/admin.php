<?php
session_start();
//⌛Getting things ready...
$log_path_authorized = urlencode( "authorized.txt" );
$log_path_unauthorized = urlencode( "unauthorized.txt" );

if ( !isset( $_SESSION[ 'usergroup' ] ) ) {
  $_SESSION[ 'usergroup' ] = 'user';
  $_SESSION[ 'user' ] = 'Guest';
}


if ( filter_has_var( INPUT_POST, 'login' ) ) {
  //⌛Collecting user input...
  $decoded_useranme = htmlspecialchars( $_POST[ 'username' ] );
  $decoded_password = htmlspecialchars( $_POST[ 'password' ] );

  //⌛Connecting to database...
  REQUIRE( "../../../../../../galleryDBaccess.php" );
  //⌛Creating query...
  $query = "SELECT * FROM users WHERE username = '$decoded_useranme' ";
  //⌛Getting result...
  $result = mysqli_query( $conn, $query );

  //⌛Getting user credential data from the server...
  $user_list = mysqli_fetch_all( $result, MYSQLI_ASSOC );

  $user = $user_list[ 0 ];
  $username = $user[ 'username' ];
  $password = $user[ 'password' ];
  $full_name = $user[ 'first_name' ] . ' ' . $user[ 'last_name' ];

  //⌛Cleaning up...
  mysqli_free_result( $result );
  mysqli_close( $conn );


  //⌛Verifying user credentials...
  if ( $decoded_useranme === $username && $decoded_password === $password ) {

    $_SESSION[ 'usergroup' ] = 'administrator';
    $_SESSION[ 'user' ] = $full_name;
    $output_status = 'access_granted';

    //⌛Logging data
    $file = fopen( $log_path_authorized, "a" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

    $event = "&nbsp&nbsp > Successful sign-in by: ";


  } else {
    // ❌ FATALITY! ❌
    $output_status = 'credentials_invalid';
    $_SESSION[ 'usergroup' ] = 'user';
    $_SESSION[ 'user' ] = 'Guest';

    //⌛Loading files...
    $file = fopen( $log_path_unauthorized, "a" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

    $id = 'app2';

    $event = "&nbsp&nbsp > Unsuccessful sign-in attempt by: ";
    // ❌ FATALITY! ❌
  }
} else if ( isset( $_GET[ 'command' ] ) ) {
  $command = $_GET[ 'command' ];

  //⌛Processing request...
  switch ( $command ) { //🔖Switch Start
    case 'logoff':
      $_SESSION[ 'usergroup' ] = 'user';
      $_SESSION[ 'user' ] = 'Guest';
      $sys_notif = urlencode( '⚠ You Have successfully signed out.' );

      $id = '';
      break;
    case 'clear-authorized.txt':
      if ( $_SESSION[ 'usergroup' ] === 'administrator' ) {

        //⌛Performing file operations...
        $file = fopen( $log_path_authorized, "w" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

        $event = "Sign-in history. (Codename 'Buki')\n\n &nbsp&nbsp > Event log cleared by: ";

        $output_status = 'success';
        $id = 'app2';

      } else {
        $output_status = 'elevation_required';
        $id = 'app2';
      }
      break;
    case 'clear-unauthorized.txt':
      if ( $_SESSION[ 'usergroup' ] === 'administrator' ) {

        //⌛Performing file operations...
        $file = fopen( $log_path_unauthorized, "w" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

        $event = "Record of previously failed sign-in attempts. (Codename 'momo')\n\n &nbsp&nbsp > Event log cleared by: ";

        $output_status = 'success';
        $id = 'app2';

      } else {
        $output_status = 'elevation_required';
        $id = 'app2';
      }
      break;
    default:
      $sys_notif = urlencode( '⚠ Something went wrong: unknown command' );
      //🔖Switch END
  }
} else if ( $_SESSION[ 'usergroup' ] === 'administrator' ) {
  $id = 'admin';
  /* 📖 Documentation
    ---------------------
    If the user simply visits this page directly (such as by entering in this page's URL) with no additional commands provided, and the user is logged in as administrator, they will, insha'Allah, be redirected to the Admin Control Center section of the main Gallery page.*/

} else {
  $output_status = 'access_denied';
  $id = 'app2';
  /* 📖 Documentation
    ---------------------
    If the user simply visits this page directly (such as by entering in this page's URL) with no additional commands provided, and the user IS NOT logged in as administrator, they will, insha'Allah, be redirected to the "sign-in" section (i.e. app2) of the main Gallery page.*/
}

//⌛logging event...
if ( isset( $file ) ) {
  fwrite( $file, $event . $_SERVER[ 'REMOTE_ADDR' ] . " @ " . date( "F j, Y, g:i a" ) . " UTC.\n" );
  fclose( $file );
}
?>

<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Let's get you signed in - CMWEB 241 NazmusLabs</title>
<meta charset="UTF-8">
<meta name="description" content="Nazmus's Student Site Webpage for
      CMWEB at Illinois Central College">
<meta name="instructor" content="Shari Tripp">
<meta name="author" content="Nazmus Shakib Khandaker
      (nk308@lab.icc.edu, nazmus@outlook.com, @NazmusLabs)">
<meta name="version" content="21.0.20.1216 (Gold)">
<meta name="patch" content="1.20.1217a">
<link rel="stylesheet" type="text/css" href="../stylesheets/stylesheet.css">
</head>
<body>
<div class="alert-neutral-dark" style="font-size: 28px; padding: 1em 1.4em; margin-left: 1.5em; margin-right: 1.5em; min-height: 5em; position: relative">
<p style="padding-bottom: .5em;">Returning you to main gallery...<br >
  <small><em>Click the link below if you arne't automatically redirected in a few seconds.</em></small></p>
<div style="position: absolute; bottom: .5em">
<a href="<?php echo "../index.php?sys_notif=$sys_notif&output_status=$output_status#$id" ?>">Return to gallery</a>
<div class="container-wide" style="position: fixed; bottom: 0px">
  <p>Thanks for visiting!
  <p> 
    <!--Licence Info -->
  <p id="license"> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank"> <img
            alt="Creative Commons License" style="border-width:0"
            src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png"></a> <br>
    This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"
          target="_blank"> Creative Commons Attribution-ShareAlike 4.0
    International License</a>. </p>
  <!--/ Licence Info --> 
  <!--Copyright Info -->
  <p><small>&copy 2020 Nazmus Shakib Khandaker and NazmusLabs. Some
    rights reserved.</small></p>
  <!--/ Copyright Info --> 
</div>
<script type="text/javascript">
             window.location.replace("<?php echo "../index.php?sys_notif=$sys_notif&output_status=$output_status#$id" ?>");
    </script>
</body>
<!--🌐 End of HTML Document 🌐-->