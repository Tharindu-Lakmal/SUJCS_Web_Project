<!-- database connection -->

<?php
// include('../connection.php');
// include('../function/commonFunction.php');
include('../function/features.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUJCS | Articles</title>

    <link rel="icon" href="../images/tab_logo.png">

    <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
    <meta name="description" content="Official website of faculty of computer science">

    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg+xml">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./article.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <!-- custom search bar css link -->
    <link rel="stylesheet" href="../reuseComponents/search.css">
    <!-- custom responsive css link -->
    <link rel="stylesheet" href="../reuseComponents/JAresponStyle.css">
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

    <!-- Artical -->

    <section class="section article-s">

        <div class="container-2 article-c">


            <!-- filter btn -->
            <div class="filter" data-filter>
                <p class="filter-text">Filter</p>

                <!-- close icon 'X' -->
                <button class='side-nav-btn' aria-label='close btn' data-side-nav-toggler-btn>
                    <ion-icon name='close-outline' aria-hidden='true'></ion-icon>
                </button>
            </div>

            <!-- Artical content -->
            <div class="article-content">



                <!-- Artical side nav -->
                <div class="side-nav" data-side-nav>

                    <div class="note">
                        <p class="p-heading">Note: </p>

                        <p class="note-p">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.
                        </p>
                    </div>

                    <div class="filter-1">
                        
                        <div class="filter-content-1">
                            
                        <?php   

                        articleSubjects();
                        
                        
                        ?>
                        
                        
                                                    
                        </div>
                        
                    </div>

                </div>

                <!-- Artical area -->
                <div class="article-area">

                    <h3 class="h3 search-heading">Here are the all Articles</h3>

                    <p class="p filter-search">
                        Filter by journal or book title
                    </p>

                    <!-- Search Bar -->
                    <section class="search-a search-article">

                        <!-- Search Bar ------------------------------- -->
                        <?php
                        search();
                        ?>

                    </section>

                    <section class="articles">

                    <?php 
                        selectCategories(); 
                        selectedArticleType();
                        selectedsubject();   
                    
                    ?>

                    </section>

                </div>

                <!-- <div class='overlay' data-overlay data-side-nav-toggler></div> -->

            </div>

            <div class='overlay' data-overlay data-side-nav-toggler></div>

        </div>

    </section>



    <!-- Footer ------------------------------- -->
    <?php
        footer();
    ?>

    <!-- custom js link-->
    <script src="../reuseComponents/navBar.js"></script>
    <script src="../reuseComponents/journal_article.js"></script>

    <script src="../signIn/sign.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>