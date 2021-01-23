<?php
session_start();
//⌛Getting things ready...
$log_path_authorized = urlencode( "authorized.txt" );
$log_path_unauthorized = urlencode( "unauthorized.txt" );

$username = 'CMWEB241';
$password = 'P@ssw0rd!'; //⌛Getting user credential data from the server...

/*💡 Developer Remarks
------------------------
The code above should NEVER be used on production environment outside controlled testing. Storing any sensitive information in plain text, especially passwords, records such as social security number, essentially equates to holding a large bilboard on the high way showing your bank account info and thinking simply telling people not to look will be enough to diswade from trying to steal the info.*/

$decoded_useranme = base64_decode( strtr( $_GET[ 'username' ], '-_', '+/' ) );
$decoded_password = base64_decode( strtr( $_GET[ 'password' ], '-_', '+/' ) );
$_session[ 'usergroup' ] = 'user';

if ( $_GET[ 'command' ] === 'logoff' ) {
  $_SESSION[ 'usergroup' ] = 'user';
  $sys_notif = urlencode( '⚠ You Have successfully signed out.' );

} else {
  if ( isset( $_GET[ 'username' ] ) && isset( $_GET[ 'password' ] ) ) {

    //⌛Verifying user credentials
    if ( $decoded_useranme === $username &&
      $decoded_password === $password ) {
      $_SESSION[ 'usergroup' ] = 'administrator';

      //⌛Loading files...
      if ( $_GET[ 'command' ] === 'clear-authorized.txt' ) {

        $file = fopen( $log_path_authorized, "w" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

        $event = "Sign-in history. (Codename 'Buki')\n\n &nbsp&nbsp > Event log cleared by: ";

      } else if ( $_GET[ 'command' ] === 'clear-unauthorized.txt' ) {

        $file = fopen( $log_path_unauthorized, "w" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

        $event = "Record of previously failed sign-in attempts. (Codename 'momo')\n\n &nbsp&nbsp > Event log cleared by: ";

      } else {

        $file = fopen( $log_path_authorized, "a" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

        $event = "&nbsp&nbsp > Successful sign-in by: ";
      }
      //❔ Old, disabled, code
      /*echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
      echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password, which was the correct password. Welcome aboard, {$username}.</p>";

      echo "The username you entered was correct";
      echo "your password was also correct";*/

    } else {
      // ❌ FATALITY! ❌
      $output_status = 'credentials_invalid';
      $_SESSION[ 'usergroup' ] = 'user';

      //⌛Loading files...
      $file = fopen( $log_path_unauthorized, "a" )or exit( "File read error: <em>there was a problem opening the requested file</em>." );

      $event = "&nbsp&nbsp > Unsuccessful sign-in attempt by: ";

      // ❌ FATALITY! ❌

      /*💡 Developer Remarks
      -----------------------
      These are disabled scripts I was using to test and debug when I was first building the sign-in functionality. I ahve left them there in case I want to echo the variables out, which case, these lines of scritps are ready to use on demand, Insha'Allah!*/
      /*echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
      echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password, but your credentials didn't fully match the username <em><strong>[REDACTED]</strong></em> and the password  <em><strong>[REDACTED]</strong></em>.</p>";*/

    }
    //⌛logging event...
    fwrite( $file, $event . $_SERVER[ 'REMOTE_ADDR' ] . " @ " . date( "F j, Y, g:i a" ) . " UTC.\n" );
    fclose( $file );

  }
  // ❌ FATALITY! ❌
  $sys_notif = '⚠ You are not authorized to access that. Please sign in first.';

  // ❌ FATALITY! ❌

  /*📖 Documentation
  ------------------
    //❔ Under normal circumstances, this block of code should NOT run because index.php isn't supposed to redirect to this page unless BOTH the isset() conditions returned true AND the credentials were correct. But regardless of wy it happened, athis conditional code is designed to catch this, redirect the user back to the index.php page they trid to sneak past, and immediatly terminate execution of code on this page to reduce risk of security exploits that could otherwise allow an attacker to get access to the contents of this page.*/

  /*💡 Developer Remarks
  ------------------------
  Maybe this happened due to thn the not so rare chance the user decides to be mischivious and attempts to bypass the login authentication on index.php by directly typing in the URL of this page--or through innocent mistakes such as links in the site itself or visitig from a bookmark, etc.*/

}


/*
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Buki"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}*/
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