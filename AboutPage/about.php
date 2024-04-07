<!-- database connection -->

<?php
    // include('../connection.php');
    include('../function/commonFunction.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>SUJCS | About</title>

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
    <link rel="stylesheet" href="./about.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <link rel="stylesheet" href="./search.css">
    <link rel="stylesheet" href="../search.css">
    <link rel="stylesheet" href="./responsiveAbout.css">
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

    <!-- Search Bar -->
    <section class="search">

        <!-- Search Bar ------------------------------- -->
        <?php
        search();
        ?>

    </section>

    <!-- main area -->

    <!-- Hero section -->
    <section class="section hero" style="background-image: url(../images/hero.png)">

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


    <!-- Main content -->
    <section class="section main">

        <div class="container-2">

            <div class="main-context">
                <h4>Who are we?</h4>
                <p>The 9th Faculty of the Sabaragamuwa University of Sri Lanka (SUSL), known 
                    as the Faculty of Computing (FoC), was officially formed through an 
                    Order outlined in Gazette Extraordinary 2312/14 on December 27, 2022. 
                    Against the backdrop of computing's pivotal role in shaping humanity's 
                    future, SUSL is committed to cultivating graduates equipped with a balanced 
                    mix of theoretical and practical expertise to meet the evolving demands of 
                    the IT/BPM industry. The creation of the FoC enhances SUSL's endeavors in this direction.
                </p>

                <div class="researcher">
                    <a href="http://www.sab.ac.lk/computing/departments/dcis-about" class='btn btn-primary'>Read more</a>
                </div>

            </div>

        </div>

    </section>

    <!-- main-context -->

    <!-- main-secondContext -->
    <section class="section section-pr">

        <div class="container-2">

            <div class="pr-content">

                <div class="pr-content-2">
                    <div class="publisher">

                        <h3 class="h3 pr-heading">Computing and Information Systems Degree Programme</h3>
                        
                        <p class="pcontent">
                        The Computing & Information Systems Degree Program aims to graduate 
                        individuals with a comprehensive understanding of fundamental computing 
                        principles and information systems. Special emphasis is placed on equipping 
                        students with the skills necessary for managing large and critical systems, 
                        addressing the specific needs of both government and non-government 
                        institutions and industries.
                        </p>
                    </div>

                    <div class="researcher">
                        <a href="http://www.sab.ac.lk/computing/departments/dcis-about" class='btn btn-primary'>Read more</a>
                    </div>
                </div>

                <div class="pr-img">
                    <img src="../images/about1.png" alt="About top Image" width="550px">
                </div>

            </div>

        </div>

    </section>

    <!-- Software Engineering Degree Programme -->
    <section class="section section-se">

        <div class="container-2">

            <div class="se-content">

                <div class="se-img">
                    <img src="../images/about2.png" alt="About top Image" width="550px">
                </div>

                <div class="se-content-2">
                    <div class="publisher">

                        <h3 class="h3 se-heading">Software Engineering Degree Programme</h3>
                        
                        <p class="pcontent">
                            In 2022, the Faculty of Computing at Sabaragamuwa University of Sri Lanka inaugurated 
                            the Department of Software Engineering (DSE), offering a BScHons Degree Programme in 
                            Software Engineering starting from the academic year 2019/2020. The primary goal of the 
                            DSE is to cultivate experts capable of producing advanced, top-notch, and affordable 
                            software systems.
                        </p>
                    </div>

                    <div class="researcher">
                        <a href="https://www.sab.ac.lk/computing/undergraduate/bsc-se-about" class='btn btn-primary'>Read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- Data Science Degree Programe -->

    <section class="section section-pr">

        <div class="container-2">

            <div class="pr-content">

                <div class="pr-content-2">
                    <div class="publisher">

                        <h3 class="h3 pr-heading">Data Science Degree Programe</h3>
                        
                        <p class="pcontent">
                            The objective is to foster the development of proficient Data Science graduates, 
                            ensuring they possess both theoretical and technical knowledge and skills. 
                            Additionally, the goal is to meet the growing demand for Data Science professionals 
                            in the industry. Currently, the Department is strengthened by a qualified academic 
                            staff, comprised of experts who have earned their degrees from reputable national 
                            and international universities, specializing in key areas of Data Science.
                        </p>
                    </div>

                    <div class="researcher">
                        <a href="https://www.sab.ac.lk/computing/undergraduate/bsc-ds-about" class='btn btn-primary'>Read more</a>
                    </div>
                </div>

                <div class="pr-img">
                    <img src="../images/about3.png" alt="Data Science Degree Programe Image" width="550px">
                </div>

            </div>

        </div>

    </section>



    <!-- Our aim -->
    <section class="section main">

        <div class="container-2">

            <div class="main-context card-context">
                <h4>Our aim</h4>

                <p>
                    The fundamental goal of this journal is to create a forum where researchers, 
                    innovators, scholars, and students can exchange their research findings. 
                    We encourage research across all branches of computer science to foster 
                    the progress of knowledge and comprehension. As a peer-reviewed journal, 
                    we strive to publish original and high-quality Research Articles, Review Articles, 
                    Survey Articles, Case Studies, and Technical Notes. Priority will be given to 
                    articles featuring advanced research concepts that contribute to societal well-being.
                </p>

            </div>

        </div>

    </section>


    <!-- Scope -->
    <section class="section main">

        <div class="container-2">

            <div class="main-context card-context">
                <h4>Scope</h4>

                <div class="card-container">
                    <!-- card 1 -->
                    <div class="card">
                        <h4>
                            Communication Network & Information Technologies
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Ad hoc & Sensor Networks
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Adaptive Applications
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Admission/Congestion/Flow Control
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Authentication, Authorization & Accounting
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Broadband Communications
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Broadband Networks
                            </li>
                        </ul>
                    </div>

                    <!-- card 2 -->
                    <div class="card">
                        <h4>
                            Data Mining and Knowledge Discovery
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Theory & Foundational Issues
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data Mining Methods
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Algorithms for Data Mining
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Knowledge Discovery Process
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Application Issues
                            </li>
                        </ul>
                    </div>

                    <!-- card 3 -->
                    <div class="card">
                        <h4>
                            Software Engineering
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Software Process
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Software Engineering Practice
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Web Engineering
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Quality Management
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Managing Software Projects
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Advanced Topics in Software Engineering
                            </li>
                        </ul>
                    </div>

                    <!-- card 4 -->
                    <div class="card">
                        <h4>
                            Database Management & Information Retrieval
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Integration & Modelling
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Networks
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Privacy & Security
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Quality
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Semantics
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data & Information Streams
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data Management in Grid & P2P Systems
                            </li>
                        </ul>
                    </div>

                    <!-- card 5 -->
                    <div class="card">
                        <h4>
                            Mobile Computing
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Mobility Management
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Distributed Real Time Systems
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                E-commerce
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Education Technology & Training
                            </li>
                        </ul>
                    </div>

                    <!-- card 6 -->
                    <div class="card">
                        <h4>
                            Information System Application & Security
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Humana Resource Management & Computing
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Architectures/Infrastructures, Agent/Intelligent/Knowledge-based Systems
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                [Bio]Medical Informatics, Social Informatics
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Data Mining, Knowledge Discovery, Data Warehouse, OLAP, Ontologies
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Database architectures/applications, decision support systems
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Enterprise/Executive Information Systems
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Ethics in Information System
                            </li>
                        </ul>
                    </div>

                    <!-- card 7 -->
                    <div class="card">
                        <h4>
                            Human Computer Interaction
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Innovative Interaction Techniques
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Multimodal Interaction
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Speech Interaction
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Graphic Interaction
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Natural Language Interaction
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Interaction in Mobile & Embedded Systems
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Interface Design & Evaluation Methodologies
                            </li>
                        </ul>
                    </div>

                    <!-- card 8 -->
                    <div class="card">
                        <h4>
                            Parallel & Distributed Technologies
                        </h4>

                        <ul class="card-list">
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Parallel & Distributed Algorithms
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Applications of Parallel & Distributed Computing
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Parallel & Distributed Architectures
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Parallel & Distributed Software
                            </li>
                            <li class="guid-items">
                                <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i> 
                                Cloud, Edge & Fog Computing
                            </li>
                        </ul>
                    </div>

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
    <script src="./about.js"></script>



    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>