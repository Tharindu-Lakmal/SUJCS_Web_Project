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
    <link rel="stylesheet" href="../landingPage/index.css">
    <link rel="stylesheet" href="./index.css">
     <!-- custom footer css link -->
     <link rel="stylesheet" href="../reuseComponents/footer.css">

</head>
<body>
    
    

    <!-- Navigation Bar -->
    <?php 
        navBar();
    ?>
<!-- Navigation Bar -->

<!-- main image and content -->
    <div class="main-image">

    
    </div>
<!-- main image and content -->
<div class="container main-content">
    <h3>Who are we?</h3>
    <p>The 9th Faculty of the Sabaragamuwa University of Sri Lanka (SUSL), known as the Faculty of Computing (FoC), was officially formed through an Order outlined in Gazette Extraordinary 2312/14 on December 27, 2022. Against the backdrop of computing's pivotal role in shaping humanity's future, SUSL is committed to cultivating graduates equipped with a balanced mix of theoretical and practical expertise to meet the evolving demands of the IT/BPM industry. The creation of the FoC enhances SUSL's endeavors in this direction.</p>
    <button class="content-button">Read More</button>
</div>
<!-- main image and content -->


    

    


    <!-- Footer -->

    <!-- custom js link-->
    <script src="../landingPage/index.js"></script>
 <!-- Footer ------------------------------- -->

 <?php
        footer();
    ?>


    <!-- custom js link-->
    <script src="../reuseComponents/navBar.js"></script>
    <script src="../Signin/sign.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

</body>
</html>