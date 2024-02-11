<?php

    $con = new mysqli('localhost', 'root', '', 'SUJCS');

    if(!$con) {
        die(mysqli_error($con));
    }

?>