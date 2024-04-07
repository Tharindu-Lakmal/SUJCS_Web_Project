<?php
$env = parse_ini_file(__DIR__ . '/.env');

$con = new mysqli($env["DB_SERVER"], $env["DB_USER"], $env["DB_PASSWORD"], $env["DB_NAME"]);

if (!$con) {
	die(mysqli_error($con));
}
