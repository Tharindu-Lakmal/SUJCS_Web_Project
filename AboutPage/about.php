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

    <title>SUJCS | About</title>

    <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
    <meta name="description" content="Official website of faculty of computer science">

    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg+xml">

    <!-- google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" 
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./about.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">

</head>
<body>
    
    <!-- Header -->
    <header class="header " data-header>

    <!-- Navigation Bar ------------------------------- -->
    <?php 
        navBar();
    ?>
    </header>

    

    <!-- main-image -->
    <div class="main-outer">
    <div class="imageMain-outer">
        <h1>Journal of Computer Science</h1>
        <h3>Faculty of Computing Sabaragamuwa <br> University of Sri Lanka</h3>

    </div>
    
    
    

    <!-- main-image -->
    <!-- main-context -->
    <div class="main-context">
        <h4>Who are we?</h4>
        <p>The 9th Faculty of the Sabaragamuwa University of Sri Lanka (SUSL), known as the Faculty of Computing (FoC), was officially formed through an Order outlined in Gazette Extraordinary 2312/14 on December 27, 2022. Against the backdrop of computing's pivotal role in shaping humanity's future, SUSL is committed to cultivating graduates equipped with a balanced mix of theoretical and practical expertise to meet the evolving demands of the IT/BPM industry. The creation of the FoC enhances SUSL's endeavors in this direction.</p>
        <button type="button"><h6>Read More</h6></button>

    </div>
    <!-- main-context -->

    <!-- main-secondContext -->
    <div class="main-outer-secondContext">
        <div class="container secondContext">
            <div class="inner-secondContext">

            </div>
            <div class="inner-image-secondContext">

            </div>
        </div>

    </div>
    <!-- main-secondContext -->
    </div>
    
   

    <!-- Footer ------------------------------- -->

    <!-- custom js link-->
    <script src="./about.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>