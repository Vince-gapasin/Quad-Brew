<?php
$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "quadbrew3";

// Turn off error display
mysqli_report(MYSQLI_REPORT_OFF);

$conn = @mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// If connection fails → do NOT echo or die
if (!$conn) {
    return;   // NOTHING is printed (true silent fail)
}
?>
