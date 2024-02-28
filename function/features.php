<?php 

include '../connection.php';


// replacement navbar

function navBar() {

    echo "
        <div class='container'>
            <a href='#' class='logo'>
                <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
            </a>

            <nav class='navbar' data-navbar>

                <div class='navbar-top'>
                    <a href='#' class='logo'>
                        <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
                    </a>

                    <!-- close icon 'X' -->
                    <button class='nav-toggle-btn' aria-label='close menu' data-nav-toggler>
                        <ion-icon name='close-outline' aria-hidden='true'></ion-icon>
                    </button>
                </div>

                <ul class='navbar-list'>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link '>Home</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link'>About</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link'>Call for Papers</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link'>Reviews</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link'>Guidelines</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='#' class='navbar-link'>Contact Us</a>
                    </li>
                </ul>

                <div class='header-action'>
                    <a href='#' class='login-btn'>Login</a>
                    <a href='#' class='btn btn-primary'>Sign Up</a>
                </div>

            </nav>

            <!-- hambager menu icon -->
            <button class='nav-toggle-btn' aria-label='open menu' data-nav-toggler>
                <ion-icon name='menu-outline' aria-hidden='true'></ion-icon>
            </button>

            <div class='overlay' data-overlay data-nav-toggler></div>
        </div>
    ";

}



// replacement search bar

function search() {
    echo "
    <div class='search_container'>

        <input class='input' type='text' placeholder='Search here'>
        <button class='search_btn btn'><ion-icon name='search'></ion-icon></button>

    </div>
    ";
}



// select_subject

function journalSubjects() {
    global $con;

    $select_query = "SELECT * FROM `journal_types`";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $categoryName = $row['type_name'];
        $categoryId = $row['type_id'];

        echo "
        <a class='p-heading' href='journal.php?category=$categoryId'><p class='p-heading'>$categoryName</p></a>
        ";

        $typeId = $row['type_id'];
        $subjectTable = "";

        switch ($categoryId) {
            case 'TJ01':
                $subjectTable = 'software_engineering';
                break;
            case 'TJ02':
                $subjectTable = 'computer_security';
                break;
            case 'TJ03':
                $subjectTable = 'cloud_computing';
                break;
        }

        if (!empty($subjectTable)) {
            $sqlSubject = "SELECT * FROM `$subjectTable`";
            $resultSubject = mysqli_query($con, $sqlSubject);

            echo "<div class='subject-container'>";

            while ($subjectRow = mysqli_fetch_assoc($resultSubject)) {
                $subjectName = $subjectRow['subject_name'];
                echo "<a href=''>$subjectName</a>";
            }

           
        }
        echo "</div><hr>";
    }
}



function articleSubjects() {
    global $con;

    $select_query = "SELECT * FROM `article_types`";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $categoryName = $row['type_name'];
        $categoryId = $row['type_id'];

        echo "
        <a class='p-heading' href='journal.php?category=$categoryId'><p class='p-heading'>$categoryName</p></a>
        ";

        $typeId = $row['type_id'];
        $subjectTable = "";

        switch ($typeId) {
            case 'TA01':
                $subjectTable = 'software_article';
                break;
            case 'TA02':
                $subjectTable = 'security_article';
                break;
            
        }

        if (!empty($subjectTable)) {
            $sqlSubject = "SELECT * FROM `$subjectTable`";
            $resultSubject = mysqli_query($con, $sqlSubject);

            echo "<div class='subject-container'>";

            while ($subjectRow = mysqli_fetch_assoc($resultSubject)) {
                $subjectName = $subjectRow['subject_name'];
                echo "<a href=''>$subjectName</a>";
            }

            echo "</div><hr>";
        }
        
    }
}


    

function selectCategories(){

    global $con;

    if(isset($_GET['category'])){

        $categoryId = $_GET['category'];

        $sql = "SELECT * FROM `journals` WHERE category_id = $categoryId";
        $result = mysqli_query($con, $sql);

        $num_of_rows = mysqli_num_rows($result);
        if($num_of_rows == 0) {
            echo "<h3 class='text-center'>No related documents for this category</h3>";
        }

        while($row = mysqli_fetch_assoc($result)){

                $title = $row['journal_title'];
                $subject = $row['jsubject'];
                $publishDate = $row['journal_publish_date'];
                $pdf = $row['journal_pdf'];
                

                
        }
    }

}


?>



