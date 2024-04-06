<?php 

include '../connection.php';


// replacement navbar

function navBar() {

    echo "
        <div class='container'>
            <a href='../landingPage/afterLoginIndex.php' class='logo'>
                <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
            </a>

            <nav class='navbar' data-navbar>

                <div class='navbar-top'>
                    <a href='../landingPage/afterLoginIndex.php' class='logo'>
                        <img src='../images/logo.png' width='64px' height='27px' alt='logo'>
                    </a>

                    <!-- close icon 'X' -->
                    <button class='nav-toggle-btn' aria-label='close menu' data-nav-toggler>
                        <ion-icon name='close-outline' aria-hidden='true'></ion-icon>
                    </button>
                </div>

                <ul class='navbar-list'>
                    <li class='navbar-item'>
                        <a href='../landingPage/afterLoginIndex.php' class='navbar-link '>Home</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='../aboutPage/about.php' class='navbar-link'>About</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='../reviewPage/organizationOM.php' class='navbar-link'>Call for Papers</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='../reviewPage/review.php' class='navbar-link'>Reviews</a>
                    </li>
                    <li class='navbar-item'>
                        <a href='submissionPC.php' class='navbar-link'>Guidelines</a>
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
                $cat = $row['category_id'];
                $author = $row['author_name'];
<<<<<<< Updated upstream
                $image = $row['journal_image'];
=======
>>>>>>> Stashed changes
    
                // Fetch type_name from journal_types table
                $sqlType = "SELECT * FROM `journal_types` WHERE type_id ='$journalTypeId'";
                $resultType = mysqli_query($con, $sqlType);
                $rowType = mysqli_fetch_assoc($resultType);
                $typeName = ($rowType) ? $rowType['type_name'] : '';
            
                echo "
                <div class='article-card'>
                    <!-- article image -->
                    <div class='card-img'>
                        <img src='../images/$image' alt=''>
                    </div>
                    <!-- article title -->
                    <div class='a-title'>
                        <p class='p title'>$title</p>
                        <p class='p sub-title'>$author, $publishDate</p>
                    </div>
                    <!-- user action -->
                    <div class='btn-access'>
                        <div class='book-mark'>
                            <button class='b-mark'><a href='../function/bookmark.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
                        </div>
                        <div class='download'>
                            <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
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
            $cat = $row['category_id'];

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
                <button class='b-mark'><a href='../function/bookmark.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
            </div>
                    <div class='download'>
                        <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
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
            $cat = $row['category_id'];

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
                <button class='b-mark'><a href='../function/bookmark.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
            </div>
                    <div class='download'>
                        <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
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

        $sql = "SELECT * FROM `journals` WHERE subject_id = '$subjectId'";
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
            $cat = $row['category_id'];

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
                <button class='b-mark'><a href='../function/bookmark.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
            </div>
                    <div class='download'>
                        <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
                    </div>
                </div>
            </div>";
        }
    }
}


// add bookmark

function bookmark(){

    global $con;


    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page or handle as needed
        header("Location: login.php");
        exit();
    }
    
    // Handle bookmarking
    if (isset($_POST['bookmark'])) {
        $user_id = $_SESSION['user_id'];
        $journal_id = $_POST['journal_id']; // Replace with your actual input name
        $article_id = $_POST['article_id']; // Replace with your actual input name
    
        // Check if the item is already bookmarked
        $check_query = "SELECT * FROM bookmarks WHERE user_id = $user_id AND (journal_id = $journal_id OR article_id = $article_id)";
        $check_result = mysqli_query($con, $check_query);
    
        if (mysqli_num_rows($check_result) == 0) {
            // Item is not bookmarked, add it to bookmarks
            $bookmark_query = "INSERT INTO bookmarks (user_id, journal_id, article_id) VALUES ($user_id, $journal_id, $article_id)";
            mysqli_query($con, $bookmark_query);
            echo "Item bookmarked successfully!";
        } else {
            // Item is already bookmarked, you can remove it or show a message
            echo "Item is already bookmarked!";
        }
    }
    
    // Fetching bookmarked items for the user
    $user_id = $_SESSION['user_id'];
    $fetch_query = "SELECT * FROM bookmarks WHERE user_id = $user_id";
    $fetch_result = mysqli_query($con, $fetch_query);
    
    // Loop through the result to display bookmarks
    while ($row = mysqli_fetch_assoc($fetch_result)) {
        $journal_id = $row['journal_id'];
        $article_id = $row['article_id'];
    
        // Display your bookmarked items as needed
        echo "<p>Journal ID: $journal_id, Article ID: $article_id</p>";
    }
    
}





?>



