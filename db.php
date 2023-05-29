<?php
define("SERVERNAME", "");
define("USERNAME", "");
define("PASSWORD", "");
define("DBNAME", "");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>