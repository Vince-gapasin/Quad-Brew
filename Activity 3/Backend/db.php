<?php
$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "quadbrew2";

// Turn off error display to the browser (prevents HTML breakage)
mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// If connection fails → do NOT echo, just stop quietly
if (!$conn) {
    die();  // Silent fail, no output
}
?>