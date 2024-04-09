<!-- database connection -->

<?php
// include('../connection.php');
include('../function/commonFunction.php');
@session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>SUJCS | User Profile</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./userProfile.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <!-- custom signin css link -->
    <link rel="stylesheet" href="../SignIn/sign.css">
    <!-- custom footer css link -->
    <link rel="stylesheet" href="../reuseComponents/footer.css">


</head>

<body>

    <!-- Header -->
    <header class="header " data-header>

        <!-- Navigation Bar ------------------------------- -->
        <?php
        navBar();
        ?>
    </header>



    <!-- Top Heading -->
    <section class="section hero">
        <div class="container-up">

            <div class="top-content">
                <h3 class="h3 section-sub-title">
                    All Your Collections in One Place
                </h3>
            </div>

        </div>
    </section>

    <!-- Content Area -->
    <section class="section main">
        <div class="container-content">

            <div class="side-nav">
                <div class="side-content">

                    <div class="user-profile">
                        <img src="../images/user.png" alt="user" width="250px">

                        <button class="edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </div>

                    <ul class="user-actions">
                        <li class="list-item">
                            <a href="userProfile.php?category_id=1">Journals</a>
                        </li>
                        <li class="list-item">
                            <a href="userProfile.php?category_id=2">Articles</a>
                        </li>
                        <li class="list-item">
                            <a href="../function/delete.php">Delete Account</a>
                        </li>
                        <li class="list-item">
                            <a href="../function/userLogout.php">Log Out</a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="content-area">
                <div class="main-content">

                    <?php
                        
                        addBookmark();
                        profileJournals();
                        removeBookmark()
                        
                    ?>

                </div>
            </div>

        </div>

    </section>



    <!-- Footer -->
    <?php
    footer();
    ?>

    <!-- Footer -->

    <!-- custom js link-->
    <script src="../reuseComponents/navBar.js"></script>
    <script src="../signIn/sign.js"></script>



    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>