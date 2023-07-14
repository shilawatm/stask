<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'tests';
$databaseUsername = 'root';
$databasePassword = 'Admin@123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>