<!-- database connection -->

<?php
    // include('../connection.php');
    include('../function/commonFunction.php');
    include('../connection.php'); //connection variable

    if(isset($_POST['submit_journal'])) {
        $journalTitle = $_POST['journal_title'];
        $journalDescription = $_POST['journal_description'];
        $journalKeyword = $_POST['journal_keyword'];
        $journalDate = $_POST['journal_publish_date'];
        $journalSubject = $_POST['journal_subject'];
        $authorName = $_POST['author_name'];
        $authorAffliation = $_POST['author_affliation'];
        $authorEmail = $_POST['author_email'];
        $authorDesignation = $_POST['author_designation'];
        

        //files
        $journalPdf = $_FILES['journal_pdf']['name'];
        

        //image temp name
        $tempJournalPdf = $_FILES['journal_pdf']['tmp_name'];
       
        //checking empty condition
        if($journalTitle=='' or $journalDescription=='' or $journalKeyword=='' or
        $journalDate=='' or $journalSubject=='' or $authorName=='' or  $authorAffliation=='' or
        $authorEmail=='' or $authorDesignation=='' or  $journalPdf=='') {
            echo "<script>alert('Please fill all the fields')</script>";
            exit();
        }
        else {
            move_uploaded_file($tempJournalPdf, "../journalPdf/$journalPdf");
            

            //upload journal
            $uploadJournal = "INSERT INTO `journals` (journal_title, journal_description, journal_keyword, 
            journal_suject, author_name, author_affliation, author_email, author_designation, journal_pdf, journal_publish_date, date) VALUES 
            ('$journalTitle', '$journalDescription', '$journalKeyword', '$journalSubject', '$authorName', 
            '$authorAffliation', '$authorEmail','$authorDesignation', '$journalPdf', '$journalDate', NOW())";

            $result_query = mysqli_query($con, $uploadJournal);

            if($result_query) {
                echo "<script>alert('Successfully inserted the peoducts')</script>";
            }
        }
    }



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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" 
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!-- custom css link -->
    <link rel="stylesheet" href="./insertJournal.css">
    <!-- custom navbar css link -->
    <link rel="stylesheet" href="../reuseComponents/navBar.css">
    <!-- <link rel="stylesheet" href="./search.css"> -->
    <!-- <link rel="stylesheet" href="./responsiveAbout.css"> -->
    

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

    

    <!-- Insert products form -->


    <div class="uploadContainer">
        <h1>Upload Journel</h1>

        <div class="form-container">
            <!-- form -->
            <form action="" method="post" enctype="multipart/form-data">

                <!-- journal title -->
                <div class="form-outline">
                    <label for="journal_title" class="form-label">
                        Journel Title
                    </label>
                    <input type="text" name="journal_title" id="journal_title" class="form-control" 
                    placeholder="Enter product title" autocomplete="off" required="required">
                </div>

                <!-- journal description -->
                <div class="form-outline">
                    <label for="journal_description" class="form-label">
                    Journel Description
                    </label>
                    <input type="text" name="journal_description" id="journal_description" class="form-control" 
                    placeholder="Enter journel description" autocomplete="off" required="required">
                </div>

                <!-- journal keyword -->
                <div class="form-outline">
                    <label for="journal_keyword" class="form-label">
                    journel Keywords
                    </label>
                    <input type="text" name="journal_keyword" id="journal_keyword" class="form-control" 
                    placeholder="Enter journel keyword" autocomplete="off" required="required">
                </div>

                <!-- journal upload date -->
                <div class="form-outline">
                    <label for="journal_publish_date" class="form-label">
                    journel publish date
                    </label>
                    <input type="date" name="journal_publish_date" id="journal_publish_date" class="form-control" 
                    placeholder="Enter journel publish date" autocomplete="off" required="required">
                </div>

                <!-- journal subject area -->
                <div class="form-outline">
                    <label for="journal_subject" class="form-label">
                    Select journel subject area
                    </label>
                    <select name="journal_subject" id="journal_subject" class="form-select">
                        <option value="">Select subject area</option>

                        <?php
                            $select_query = "SELECT * FROM `journal_subjects`";
                            $result_query = mysqli_query($con, $select_query);

                            while($row = mysqli_fetch_assoc($result_query)) {
                                $subjectName = $row['subject_name']; // Corrected variable name
                                $subjectId = $row['subject_id'];
                                echo "<option value='$subjectId'>$subjectName</option>";
                            }
                        ?>

                        
                    </select>
                </div>

               
                <!-- j pdf -->
                <div class="form-outline">
                    <label for="journal_pdf" class="form-label">
                    Upload Journal
                    </label>
                    <input type="file" name="journal_pdf" id="journal_pdf" class="pdf-control" required="required">
                </div>

              

                <!-- j-author -->
                <div class="form-outline">
                    <label for="author_name" class="form-label">
                    Author Name
                    </label>
                    <input type="text" name="author_name" id="author_name" class="form-control" 
                    placeholder="Enter author name" autocomplete="off" required="required">
                </div>

                <!-- j-author Affiliation-->
                <div class="form-outline">
                    <label for="author_affliation" class="form-label">
                    Author Affiliation
                    </label>
                    <input type="text" name="author_affliation" id="author_affliation" class="form-control" 
                    placeholder="Enter author affiliation" autocomplete="off" required="required">
                </div>

                <!-- j-author email-->
                <div class="form-outline">
                    <label for="author_email" class="form-label">
                    Author Emai Address
                    </label>
                    <input type="text" name="author_email" id="author_email" class="form-control" 
                    placeholder="Enter author email" autocomplete="off" required="required">
                </div>

                 <!-- j-author designation-->
                <div class="form-outline">
                    <label for="author_designation" class="form-label">
                    Author designation
                    </label>
                    <input type="text" name="author_designation" id="author_designation" class="form-control" 
                    placeholder="Enter author designation" autocomplete="off" required="required">
                </div>
                                
                <!-- p button -->
                <div class="form-outline butt">
                    <input type="submit" name="submit_journal" class="btn0" value="Submit Journal">
                </div>

            </form>

        </div>
    </div>

    <!-- End Insert products form -->

    
    
   

    <!-- Footer -->
    
    <!-- Footer -->

    <!-- custom js link-->
    <script src="./insertJournal.js"></script>
    


    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html> 