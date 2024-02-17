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
    <link rel="icon" href="../images/tab_logo.png" type="image/x-icon">

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
    <link rel="stylesheet" href="./search.css">
    

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

    

    <!-- main-image -->
    <div class="main-outer">
    <div class="image-outer" style="margin-top: 0;">
        <h1>Journal of Computer Science</h1>
        <h3>Faculty of Computing Sabaragamuwa <br> University of Sri Lanka</h3>

    </div>
    

    

    <!-- main-image -->
    <!-- main-context -->
    <div class="main-context">
        <h4>Who are we?</h4>
        <p>The 9th Faculty of the Sabaragamuwa University of Sri Lanka (SUSL), known as the Faculty of Computing (FoC), was officially formed through an Order outlined in Gazette Extraordinary 2312/14 on December 27, 2022. Against the backdrop of computing's pivotal role in shaping humanity's future, SUSL is committed to cultivating graduates equipped with a balanced mix of theoretical and practical expertise to meet the evolving demands of the IT/BPM industry. The creation of the FoC enhances SUSL's endeavors in this direction.</p>
        <button type="button"><h6><a href="https://www.sab.ac.lk/computing/">Read More</a></h6></button>

    </div>
    <!-- main-context -->

    <!-- main-secondContext -->
    <div class="main-outer-secondContext">
        <div class="secondContext">
            <div class="inner-secondContext">
                <h4>
                    Computing and Information Systems <br>Degree Programme
                </h4>
               <p>
               The Computing & Information Systems Degree Program aims to graduate individuals with a comprehensive understanding of fundamental computing principles and information systems. Special emphasis is placed on equipping students with the skills necessary for managing large and critical systems, addressing the specific needs of both government and non-government institutions and industries."
               </p>
                <button type="button"><h6><a href="https://www.sab.ac.lk/computing/departments/dcis-about">Read More</a></h6></button>

            </div>
            <div class="inner-image-secondContext">
                    <img src="../images/about1.png" alt="">
            </div>
        </div>

    </div>
    <!-- main-secondContext -->

    <!-- main-thirdContext -->
    
        <div class="thirdContext">
        
            <div class="inner-image-thirdContext">
                    <img src="../images/about2.png" alt="">
            </div>

            <div class="inner-thirdContext">
                <h4>
                Software Engineering Degree Programme
                </h4>
               <p>
                In 2022, the Faculty of Computing at Sabaragamuwa University of Sri Lanka inaugurated the Department of Software Engineering (DSE), offering a BScHons Degree Programme in Software Engineering starting from the academic year 2019/2020. The primary goal of the DSE is to cultivate experts capable of producing advanced, top-notch, and affordable software systems.
               </p>
                <button type="button"><h6><a href="https://www.sab.ac.lk/computing/undergraduate/bsc-se-about">Read More</a></h6></button>

            
            </div>
            </div>

    
    <!-- main-thirdContext -->
    <!-- main-fourthContext -->
    <div class="main-outer-secondContext">
        <div class="secondContext">
            <div class="inner-secondContext">
                <h4>
                Data Science Degree Programe
                </h4>
               <p>
               The objective is to foster the development of proficient Data Science graduates, ensuring they possess both theoretical and technical knowledge and skills. Additionally, the goal is to meet the growing demand for Data Science professionals in the industry. Currently, the Department is strengthened by a qualified academic staff, comprised of experts who have earned their degrees from reputable national and international universities, specializing in key areas of Data Science.
               </p>
                <button type="button"><h6><a href="https://www.sab.ac.lk/computing/undergraduate/bsc-ds-about">Read More</a></h6></button>

            </div>
            <div class="inner-image-secondContext">
                    <img src="../images/about3.png" alt="">
            </div>
        </div>

    </div>
    <!-- main-fourthContext -->

    


    <div class="fifth-Context-outer">
        <div class="fifth-context">
            <h4>Our aim</h4>
            <p>The fundamental goal of this journal is to create a forum where researchers, innovators, scholars, and students can exchange their research findings. We encourage research across all branches of computer science to foster the progress of knowledge and comprehension. As a peer-reviewed journal, we strive to publish original and high-quality Research Articles, Review Articles, Survey Articles, Case Studies, and Technical Notes. Priority will be given to articles featuring advanced research concepts that contribute to societal well-being.</p>
            

        </div>
            
    </div>`
    <!-- scope -->
    <div class="scope">
    <h4 class="scp">Scope</h4>
        <div class="scope-outer">
            
            <div class="scope-box">
                <h4>
                    Communication Network & Information
                    Technologies
                </h4>

                <ul>
                    <li>Ad hoc & Sensor Networks</li>
                    <li>Adaptive Applications</li>
                    <li>Admission/Congestion/Flow Control</li>
                    <li>Authentication, Authorization & Accounting</li>
                    <li>Broadband Communications</li>
                    <li>Broadband Networks</li>
                </ul>

            </div>
            <div class="scope-box">
            <h4>
                Data Mining and Knowledge Discovery
            </h4>
            <ul>
                <li>Theory & Foundational Issues</li>
                <li>Data Mining Methods</li>
                <li>Algorithms for Data Mining</li>
                <li>Knowledge Discovery Process</li>
                <li>Application Issues</li>
            </ul>

            </div>
            <div class="scope-box" >
            <h4 style="margin-top: 20px;">
                Software Engineering
            </h4>

            <ul>
                <li>Software Process</li>
                <li>Software Engineering Practice</li>
                <li>Web Engineering</li>
                <li>Quality Management</li>
                <li>Managing Software Projects</li>
                <li>Advanced Topics in Software Engineering</li>
            </ul>
     
            </div>

    </div>

    <div class="scope-outer">
            
            <div class="scope-box">
                <h4>
                Database Management & Information Retrieval
                </h4>

                <ul>
                    <li>Data & Information Integration & Modelling</li>
                    <li>Data & Information Networks</li>
                    <li>Data & Information Privacy & Security</li>
                    <li>Data & Information Quality</li>
                    <li>Data & Information Semantics</li>
                    <li>Data & Information Streams</li>
                    <li>Data Management in Grid & P2P Systems</li>
                </ul>

            </div>
            <div class="scope-box">
            <h4 style="margin-top: 20px;">
            Mobile Computing
            </h4>
            <ul>
                <li>Mobility Management</li>
                <li>Distributed Real Time Systems</li>
                <li>E-commerce</li>
                <li>Education Technology & Training</li>
            
            </ul>

            </div>
            <div class="scope-box" >
            <h4>
            Information System Application & Security
            </h4>

            <ul>
                <li>Humana Resource Management & Computing</li>
                <li>Architectures/Infrastructures, Agent/Intelligent/Knowledge-based Systems</li>
                <li>[Bio]Medical Informatics, Social Informatics</li>
                <li>Collaborative Work Systems/Management, Human Factors</li>
                <li>Data Mining, Knowledge Discovery, Data Warehouse, OLAP, Ontologies</li>
                <li>Database architectures/applications, decision support systems</li>
                <li>Enterprise/Executive Information Systems</li>
                <li>Ethics in Information System</li>
               
            </ul>
     
            </div>

    </div>

    <div class="scope-outer">
            
            <div class="scope-box" style="width: 33%;">
                <h4 style="margin-top: 20px;">
                Human Computer Interaction
                </h4>

                <ul>
                    <li>Innovative Interaction Techniques</li>
                    <li>Multimodal Interaction</li>
                    <li>Speech Interaction</li>
                    <li>Graphic Interaction</li>
                    <li>Natural Language Interaction</li>
                    <li>Interaction in Mobile & Embedded Systems</li>
                    <li>Interface Design & Evaluation Methodologies</li>
                </ul>

            </div>
            <div class="scope-box" style="width: 33%;">
            <h4>
            Parallel & Distributed Technologies
            </h4>
            <ul>
                <li>Parallel & Distributed Algorithms</li>
                <li>Applications of Parallel & Distributed Computing</li>
                <li>Parallel & Distributed Architectures</li>
                <li>Parallel & Distributed Software</li>
                <li>Cloud, Edge & Fog Computing</li>
            </ul>

            </div>
            

    </div>
    </div>
   

    <!-- scope -->
    </div>
    
   

    <!-- Footer -->
    
    <!-- Footer -->

    <!-- custom js link-->
    <script src="./about.js"></script>
    


    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>