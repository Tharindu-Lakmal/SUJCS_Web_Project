<?php

include '../function/commonFunction.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUJCS | Sabaragamuwa University of Sri Lanka</title>

    <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
    <meta name="description" content="Official website of faculty of computer science">

    <!-- favicon link -->
    <link rel="icon" href="../images/tab_logo.png" type="image/x-icon">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" 
    rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./editor.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <!-- custom search bar css link -->
    <link rel="stylesheet" href="../aboutPage/search.css">

</head>


</head>
<body>

<!-- Header -->
<header class="header " data-header>

<!-- Navigation Bar ------------------------------- -->
<?php 
    navBar();
?>
</header>

<!-- Search Bar -->
<section class="search">

    <!-- Search Bar ------------------------------- -->
    <?php
    search();
    ?>

</section>


<!-- chief-editor -->

<div class="chief-outer">
    <div class="innersq">
        <div class="square-content">
            <div class="editor-image">

            </div>
            <div class="editor-info">
                <h4>Editor in chief</h4>

                <h5>Dr.KPN Jayasena</h5>
                <h5>Department of Computing & Information Systems Sabaragamuwa</h5>
                <h5>University Of Sri Lanka</h5><br>
                <h5>pubudu@appsc.sab.ac.lk</h5>
            </div>
        </div>
    </div>
    <div class="circle">

    </div>

</div>

<!-- chief-editor -->


<!-- other-editors -->

<div class="other-editor-outer">


<!-- first-editor -->
<div class="square-content">
            <div class="editor-image">

            </div>
            <div class="editor-info">
                <h4>Editor in chief</h4>

                <h5>Dr.KPN Jayasena</h5>
                <h5>Department of Computing & Information Systems Sabaragamuwa</h5>
                <h5>University Of Sri Lanka</h5><br>
                <h5>pubudu@appsc.sab.ac.lk</h5>
            </div>
        </div>

<!-- first-editor -->

<!-- second-editor -->
        <div class="square-content">
            <div class="editor-image">

            </div>
            <div class="editor-info">
                <h4>Editor in chief</h4>

                <h5>Dr.KPN Jayasena</h5>
                <h5>Department of Computing & Information Systems Sabaragamuwa</h5>
                <h5>University Of Sri Lanka</h5><br>
                <h5>pubudu@appsc.sab.ac.lk</h5>
            </div>
        </div>
        <!-- second-editor -->

        <!-- third-editor -->
        <div class="square-content">
            <div class="editor-image">

            </div>
            <div class="editor-info">
                <h4>Editor in chief</h4>

                <h5>Dr.KPN Jayasena</h5>
                <h5>Department of Computing & Information Systems Sabaragamuwa</h5>
                <h5>University Of Sri Lanka</h5><br>
                <h5>pubudu@appsc.sab.ac.lk</h5>
            </div>
        </div>
        <!-- third-editor -->
        
</div>
<!-- other-editor -->
    


<script src="editor.js"></script>

 <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>