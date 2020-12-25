<?php
if ( !isset( $_SERVER[ 'PHP_AUTH_USER' ] ) ) {
  header( 'WWW-Authenticate: Basic realm="Site admin for gallery page"' );
  header( 'HTTP/1.0 401 Unauthorized' );
  // 🟡 There doesn't appear to be any existing authentication details for the client on this device. Let's get us signed in...

  //❔ 'Return this repsonse if they cancel the authentication process.';
  $system_response = "Athentication attempt cancelled by user.";
  $alert = "You cancled the sign-in request. You'll need to sign in before you can access the administrative tools and upload content to this veroion of the gallery.";
  $alert_lass = 'error_light';


} else {

  //⌛Getting user credential data stored on server...
  $username = 'CMWEB241';
  $password = 'P@ssw0rd!';
  /*💡 Developer Remarks
  ------------------------
  This type of code should NEVER be used on production environment outside controlled testing. Storing any sensitive information in plain text, especially passwords, records such as social security number, essentially equates to holding a large bilboard on the high way showing your bank account info and thinking simply telling people not to look will be enough to diswade from trying to steal the info.*/


  //⌛Verifying user credentials
  if ( $_SERVER[ 'PHP_AUTH_USER' === $username ] &&
    $_SERVER[ 'PHP_AUTH_PW' === $password ] ) {

    /*echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password, which was the correct password. Welcome aboard, {$username}.</p>";

    echo "The username you entered was correct";
    echo "your password was also correct";*/

  } else {
    /*💡 Developer Remarks
    These are disabled scripts I was using to test and debug when I was first building the sign-in functionality. I ahve left them there in case I want to echo the variables out, which case, these lines of scritps are ready to use on demand, Insha'Allah!*/
    /*echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password, but your credentials didn't fully match the username <em><strong>[REDACTED]</strong></em> and the password  <em><strong>[REDACTED]</strong></em>.</p>";*/

  }


}
?>
<!-- 🌐 START OF HTML DOCUMENT 🌐-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Special - CMWEB 241 NazmusLabs</title>
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
  <p style="padding-bottom: .5em;">Returning you to main gallery... <br >
    <small><em>Click the link below if you arne't redirected in within a few seconds.</em></small></p>
  <!---<script type="text/javascript">
             window.location.replace('../index.php?notify=');
    </script>-->
  <?php $alert = urlencode('⚠ You Have successfully signed out.')?>
    <div style="position: absolute; bottom: .5em"><a href="../index.php?output=success&usergroup=administrator">Return to gallery as Admin</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="../index.php?usergroup=user&alert-class=alert-warning-light&alert=hi">Return to gallery as user</a> </div> </div>
  
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

<!--🌐 End of HTML Document 🌐--> 
