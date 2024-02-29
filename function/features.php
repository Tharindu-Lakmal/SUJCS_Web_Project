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



// function for show journal type and that subjects

function journalSubjects() {
    global $con;

    $select_query = "SELECT * FROM `journal_types`";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $journalName = $row['type_name'];
        $journalId = $row['type_id'];

        echo "
        <a class='p-heading' href='journal.php?journalId=$journalId'><p class='p-heading'>$journalName</p></a>
        ";

        
        $subjectTable = "";

        switch ($journalId) {
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
                $subjectId = $subjectRow['subject_id'];
                echo "<a href='journal.php?subjectId=$subjectId'>$subjectName</a>";
            }

           
        }
        echo "</div><hr>";
    }
}

//function for show article type and subjects

function articleSubjects() {
    global $con;

    $select_query = "SELECT * FROM `article_types`";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $articleName = $row['type_name'];
        $articleId = $row['type_id'];

        echo "
        <a class='p-heading' href='article.php?articleId=$articleId'><p class='p-heading'>$articleName</p></a>
        ";

        
        $subjectTable = "";

        switch ($articleId) {
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
                $subjectId = $subjectRow['subject_id'];
                echo "<a href='article.php?subjectId=$subjectId'>$subjectName</a>";
            }

            echo "</div><hr>";
        }
        
    }
}


    //function for categories

    function selectCategories(){

        global $con;
    
        if(isset($_GET['category_id'])){
    
            $categoryId = $_GET['category_id'];
    
            $sql = "SELECT * FROM `journals` WHERE category_id = $categoryId";
            $result = mysqli_query($con, $sql);
    
            $num_of_rows = mysqli_num_rows($result);
            if($num_of_rows == 0) {
                echo "<h3 class='text-center'>No related documents for this category</h3>";
            }
    
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['journal_title'];
                $publishDate = $row['journal_publish_date'];
                $pdf = $row['journal_pdf'];
                $journalTypeId = $row['journal_type_id'];
    
                // Fetch type_name from journal_types table
                $sqlType = "SELECT * FROM `journal_types` WHERE type_id ='$journalTypeId'";
                $resultType = mysqli_query($con, $sqlType);
                $rowType = mysqli_fetch_assoc($resultType);
                $typeName = ($rowType) ? $rowType['type_name'] : '';
            
                echo "
                <div class='article-card'>
                    <!-- article image -->
                    <div class='card-img'>
                        <img src='../images/about1.png' alt=''>
                    </div>
                    <!-- article title -->
                    <div class='a-title'>
                        <p class='p title'>$title</p>
                        <p class='p sub-title'>$typeName, $publishDate</p>
                    </div>
                    <!-- user action -->
                    <div class='btn-access'>
                        <div class='book-mark'>
                            <button class='b-mark'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></button>
                        </div>
                        <div class='download'>
                            <button class='download-icon'><i class='fa-solid fa-download' style='color: #ababab;'></i></button>
                        </div>
                    </div>
                </div>";
            }
        }
    }
    



//function for selected journal type

function selectedJournalType(){

    global $con;

    if(isset($_GET['journalId'])){

        $journalId = $_GET['journalId'];

        $sql = "SELECT * FROM `journals` WHERE journal_type_id = '$journalId'";
        $result = mysqli_query($con, $sql);

        $num_of_rows = mysqli_num_rows($result);
        if($num_of_rows == 0) {
            echo "<h3 class='text-center'>No related journals for this category</h3>";
        }

        while($row = mysqli_fetch_assoc($result)){
            $title = $row['journal_title'];
            $publishDate = $row['journal_publish_date'];
            $pdf = $row['journal_pdf'];
            $journalTypeId = $row['journal_type_id'];

            // Fetch type_name from journal_types table
            $sqlType = "SELECT * FROM `journal_types` WHERE type_id = '$journalTypeId'";
            $resultType = mysqli_query($con, $sqlType);
            $rowType = mysqli_fetch_assoc($resultType);
            $typeName = ($rowType) ? $rowType['type_name'] : '';

            echo "
            <div class='article-card'>
                <!-- article image -->
                <div class='card-img'>
                    <img src='../images/about1.png' alt=''>
                </div>
                <!-- article title -->
                <div class='a-title'>
                    <p class='p title'>$title</p>
                    <p class='p sub-title'>$typeName, $publishDate</p>
                </div>
                <!-- user action -->
                <div class='btn-access'>
                    <div class='book-mark'>
                        <button class='b-mark'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></button>
                    </div>
                    <div class='download'>
                        <button class='download-icon'><i class='fa-solid fa-download' style='color: #ababab;'></i></button>
                    </div>
                </div>
            </div>";
        }
    }
}




//function for selected article type

function selectedArticleType(){

    global $con;

    if(isset($_GET['articleId'])){

        $articleId = $_GET['articleId'];

        $sql = "SELECT * FROM `journals` WHERE journal_type_id = '$articleId'";
        $result = mysqli_query($con, $sql);

        $num_of_rows = mysqli_num_rows($result);
        if($num_of_rows == 0) {
            echo "<h3 class='text-center'>No related articles for this Type</h3>";
        }

        

        while($row = mysqli_fetch_assoc($result)){
            $title = $row['journal_title'];
            $publishDate = $row['journal_publish_date'];
            $pdf = $row['journal_pdf'];
            $journalTypeId = $row['journal_type_id'];

            // Fetch type_name from journal_types table
            $sqlType = "SELECT * FROM `article_types` WHERE type_id = '$journalTypeId'";
            $resultType = mysqli_query($con, $sqlType);
            $rowType = mysqli_fetch_assoc($resultType);
            $typeName = ($rowType) ? $rowType['type_name'] : '';

            echo "
            <div class='article-card'>
                <!-- article image -->
                <div class='card-img'>
                    <img src='../images/about1.png' alt=''>
                </div>
                <!-- article title -->
                <div class='a-title'>
                    <p class='p title'>$title</p>
                    <p class='p sub-title'>$typeName, $publishDate</p>
                </div>
                <!-- user action -->
                <div class='btn-access'>
                    <div class='book-mark'>
                        <button class='b-mark'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></button>
                    </div>
                    <div class='download'>
                        <button class='download-icon'><i class='fa-solid fa-download' style='color: #ababab;'></i></button>
                    </div>
                </div>
            </div>";
        }
    }
}
   


//functio for selected subjects

function selectedsubject(){

    global $con;

    if(isset($_GET['subjectId'])){

        $subjectId = $_GET['subjectId'];

        $sql = "SELECT * FROM `journals` WHERE subject_id = $subjectId";
        $result = mysqli_query($con, $sql);

        $num_of_rows = mysqli_num_rows($result);
        if($num_of_rows == 0) {
            echo "<h3 class='text-center'>No related document for this subject</h3>";
        }

        while($row = mysqli_fetch_assoc($result)){
            $title = $row['journal_title'];
            $publishDate = $row['journal_publish_date'];
            $pdf = $row['journal_pdf'];
            $journalTypeId = $row['journal_type_id'];

            // Fetch type_name from journal_types table
            $sqlType = "SELECT * FROM `journal_types` WHERE type_id = '$journalTypeId'";
            $resultType = mysqli_query($con, $sqlType);
            $rowType = mysqli_fetch_assoc($resultType);
            $typeName = ($rowType) ? $rowType['type_name'] : '';

            echo "
            <div class='article-card'>
                <!-- article image -->
                <div class='card-img'>
                    <img src='../images/about1.png' alt=''>
                </div>
                <!-- article title -->
                <div class='a-title'>
                    <p class='p title'>$title</p>
                    <p class='p sub-title'>$typeName, $publishDate</p>
                </div>
                <!-- user action -->
                <div class='btn-access'>
                    <div class='book-mark'>
                        <button class='b-mark'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></button>
                    </div>
                    <div class='download'>
                        <button class='download-icon'><i class='fa-solid fa-download' style='color: #ababab;'></i></button>
                    </div>
                </div>
            </div>";
        }
    }
}

?>



