<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Athentication attempt cancelled by user. Please refresh the page.';
    exit;
} else {
    //echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    //echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
    $command = $_GET['command'];
    $username = strtr( base64_encode( $_SERVER['PHP_AUTH_USER'] ), '+/', '-_' );
    $password = strtr( base64_encode( $_SERVER['PHP_AUTH_PW'] ), '+/', '-_' );
    header("location: admin.php?username=$username&password=$password&command=$command");
}