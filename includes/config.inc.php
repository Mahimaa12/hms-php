<?php
session_start();
 
$servername = "localhost"; // Changed from hms.test to localhost
$dBUsername = "root";
$dBPassword = ""; // Changed from 'root' to blank for XAMPP default
$dBName = "hostel_db"; // Changed from 'hostel_management_system'
$dBPort = 3307; // Added the custom MySQL port

// Now use the variables above in the connect function:
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, $dBPort);

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
?>