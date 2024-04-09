<!-- database connection -->

<?php
include('../connection.php');
include('../function/commonFunction.php');
include '../function/userFunction.php';
// include '../function/userSecondaryFunction.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SUJCS | Sabaragamuwa University of Sri Lanka</title>

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
    <link rel="stylesheet" href="./index.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <!-- custom search bar css link -->
    <link rel="stylesheet" href="../reuseComponents/search.css">
    <!-- custom responsive css link -->
    <link rel="stylesheet" href="./responsive.css">
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
        signIn();
        signUp();
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

    <!-- main area -->

    <!-- Hero section -->
    <section class="section hero" style="background-image: url(../images/hero1.png)">

        <!-- Hero content -->
        <div class="container">

            <div class="hero-content">
                <h1 class="h1 section-title">
                    Journal of Computer Science
                </h1>
                <h3 class="h3 section-sub-title">
                    Faculty of Computing <br>
                    Sabaragamuwa University of Sri Lanka
                </h3>
            </div>

        </div>

    </section>


    <!-- Main heading -->
    <section class="section main">

        <!-- Main content -->
        <div class="container-2">

            <div class="main-content">
                <h1 class="h1 section-title">
                    Computer Sciences and Software Engineering
                </h1>
                <p class="sub-content">
                    SUJCS is a peer reviewed journal aiming to publish high quality
                    articles on topical issues in new theoretical results in all areas.
                </p>
                <!-- <p class="sub-content">
                    in new theoretical results in all areas.
                </p> -->
            </div>

        </div>

    </section>


    <!-- categories -->
    <section class="section">

        <!-- categories content -->
        <div class="container-2">

            <div class="category">

                <!-- Articles -->
                <div class="card">
                    <img src="../images/newspaper.png" alt="Articles" width="100px" style="margin: auto;">
                    <p class="category-text">
                        Explore the latest advancements in Information Technology
                    </p>
                    <a href="../articlePage/article.php?category_id=2" class="btn btn-category btn-primary">Articles</a>
                </div>

                <!-- Journals -->
                <div class="card">
                    <img src="../images/book-journal.png" alt="Journals" width="100px" style="margin: auto;">
                    <p class="category-text">
                        featuring professionally curated journals that cover diverse topics
                    </p>
                    <a href="../journalPage/journal.php?category_id=1" class="btn btn-category btn-primary">Journals</a>
                </div>

                <!-- Authors -->
                <div class="card">
                    <img src="../images/editor.png" alt="Authors" width="100px" style="margin: auto;">
                    <p class="category-text">
                        Find our well qualified Authors by simply clicking
                    </p>
                    <a href="../editorPage/editor.php" class="btn btn-category btn-primary">Authors</a>
                </div>
            </div>

        </div>

    </section>

    <!-- For publisher/researcher content -->
    <section class="section section-pr">

        <!-- Publisher/researcher content -->
        <div class="container-2">

            <div class="pr-content">

                <!-- publisher/researcher content -->
                <div class="pr-content-2">
                    <div class="publisher">
                        <h3 class="h3 pr-heading">For Publishers</h3>
                        <p class="pcontent">
                            Explore opportunities with us to amplify the reach
                            and impact of your publications
                        </p>
                    </div>

                    <div class="researcher">
                        <h3 class="h3 pr-heading">For Researchers</h3>
                        <p class="pcontent">
                            Join us in advancing knowledge and shaping the discourse in your field.
                            Submit your work for consideration today.
                        </p>
                    </div>
                </div>

                <!-- publisher/researcher image -->
                <div class="pr-img">
                    <img src="../images/lp_sub1.png" alt="Publisher/Researcher Image" width="550px">
                </div>

            </div>

        </div>

    </section>

    <!-- Purpose content -->
    <section class="section section-pr">

        <!-- Purpose content -->
        <div class="container-2">

            <div class="pur-heading">
                <h3 class="h3 pur-heading">Why are we doing this?</h3>
            </div>

            <div class="pur-content">

                <!-- purpose content -->
                <div class="pur-content-2">
                    <p class="pcontent">
                        SUJCS is a peer-reviewed journal dedicated to publishing high
                        quality articles that address current issues and present novel
                        theoretical findings across various domains, including Communication
                        Networks and Information Technologies, Mobile Computing, Data Mining,
                        Knowledge Discovery, Software Engineering, Database Management,
                        Information Retrieval, Human-Computer Interaction, Multimedia Computing,
                        Information Systems Applications, Security, Parallel and Distributed
                        Technologies, and Cloud Applications and Computing.
                    </p>
                </div>

                <!-- purpose image -->
                <div class="pr-img">
                    <img src="../images/lp_sub2.png" alt="Publisher/Researcher Image" width="550px">
                </div>

            </div>

        </div>

    </section>


    <!-- Guidance content -->
    <section class="section" id="guidlines">

        <!-- Guidance content -->
        <div class="container-2">

            <div class="guid-heading">
                <h3 class="h3 guid-heading">Guidance for Submission</h3>
            </div>

            <div class="guid-content">

                <!-- Guidance image -->
                <div class="guid-img">
                    <img src="../images/lp_sub3.png" alt="Publisher/Researcher Image" width="400px">
                </div>

                <!-- Guidance content -->
                <div class="guid-content-2">

                    <p class="pcontent">
                        Prior to submitting your manuscript to SUJCS, kindly review the aims and scope
                        as well as the Submission Guidelines.
                    </p>

                    <ul class="guid-list">
                        <li class="guid-items">
                            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> SUJCS considers research papers, 
                            case studies, practitioner papers, technical
                            papers, and book reviews for publication.
                        </li>
                        <li class="guid-items">
                            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
                            <span class="guid-text">
                                
                                The articles shall be submitted via email in MS Word format or pdf format to 
                                <span class="guid-text"><a href="#">SUJCS@sab.ac.lk</a></span>
                            </span>
                        </li>

                        <li class="guid-items">
                            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> Please do not hesitate to contact 
                            the editorial office for more information.
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer ------------------------------- -->
    <?php
        footer();
    ?>

    <!-- custom js link-->
    <script src="../reuseComponents/navBar.js"></script>
    <script src="../signIn/sign.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>