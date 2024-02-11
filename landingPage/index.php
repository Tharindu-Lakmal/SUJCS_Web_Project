<!-- database connection -->

<?php
    // include('../connection.php');
    include('../function/commonFunction.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUJCS | Sabaragamuwa University of Sri Lanka</title>

    <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
    <meta name="description" content="Official website of faculty of computer science">

    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg+xml">

    <!-- google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" 
    rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./index.css">

</head>
<body>
    
    <!-- Header -->
    <header class="header " data-header>

    <!-- Navigation Bar ------------------------------- -->
    <?php 
        navBar();
    ?>

    </header>

    <h1>
        SUJCS <br><br><br><br> SUJCS <br><br><br><br> SUJCS <br><br><br><br> SUJCS <br><br><br><br>
    </h1>


    <!-- Footer ------------------------------- -->

    <!-- custom js link-->
    <script src="./index.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>