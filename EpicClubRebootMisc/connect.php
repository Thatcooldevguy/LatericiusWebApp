<?php
$servername = "localhost";
$username = "lateric2_wearelatericius";
$password = "SomePassWordHere";
$database = "lateric2_accountslgggt";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
