<?php
//Verifying authntication
if ( /*🏀*/ isset( $_SERVER[ 'PHP_AUTH_USER' ] ) && isset( $_GET[ 'status' ] ) /*🏀*/ ) {
  header( 'location: ../index.php?usergroup=admin' );

} else {

  /*📖 Documentation
    ------------------
  //❔ Under normal circumstances, this block of code should NOT run because index.php isn't supposed to redirect to this page unless BOTH the isset() conditions returned true AND the credentials were correct. But regardless of wy it happened, athis conditional code is designed to catch this, redirect the user back to the index.php page they trid to sneak past, and immediatly terminate execution of code on this page to reduce risk of security exploits that could otherwise allow an attacker to get access to the contents of this page.*/

  /*💡 Developer Remarks
  ------------------------
  Maybe this happened due to thn the not so rare chance the user decides to be mischivious and attempts to bypass the login authentication on index.php by directly typing in the URL of this page--or through innocent mistakes such as links in the site itself or visitig from a bookmark, etc.*/
  header( 'location: index.php' );
  exit();
  // ❌ FATALITY! ❌
  /*🧊🧊*/
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




