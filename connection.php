<?php
$con = new mysqli('localhost', 'root', '', 'SUJCS');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>