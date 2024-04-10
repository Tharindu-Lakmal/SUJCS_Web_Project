<?php 

include '../connection.php';
@session_start();

// Navigation Bar --------------------------------------------------------------------

function navBar()
{ ?>
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
					<a href='../landingPage/index.php' class='navbar-link'>Home</a>
				</li>
				<li class='navbar-item'>
					<a href='../aboutPage/about.php' class='navbar-link'>About</a>
				</li>

				<li class='navbar-item'>
					<a href='../reviewPage/organizationOM.php' class='navbar-link'>Reviews</a>
				</li>
				<li class='navbar-item'>
					<a href='../reviewPage/reviewPage.php' class='navbar-link'>Guidlins</a>
				</li>
				<li class='navbar-item'>
                <a href='../popular-articles/' class='navbar-link'>Popular</a>Editorial Board</a>
				</li>
			</ul>

			<div class='header-action'>

				<input type='submit' value='Login' class='login-btn' data-sign />

				<input type='submit' value='Sign Up' class='btn btn-primary' data-sign />

			</div>

		</nav>

		<!-- hambager menu icon -->
		<button class='nav-toggle-btn' aria-label='open menu' data-nav-toggler>
			<ion-icon name='menu-outline' aria-hidden='true'></ion-icon>
		</button>

		<div class='overlay' data-overlay data-nav-toggler></div>
	</div>


	<main class='sign-main' data-sign-main style="display: none; visibility: visible;">
		<div class='box'>

			<div class='close-btn' data-close>
				<i class='fa-solid fa-circle-xmark' style='color: #3e37c8;'></i>
			</div>

			<div class='inner-box'>

				<div class='forms-wrap'>


					<form action='../landingPage/index.php' method='post' autocomplete='off' class='sign-in-form'>
						<div class='logo-s'>
							<img src='../images/logo.png' alt='SUJCS' />
						</div>

						<div class='heading'>
							<h2>Welcome Back</h2>
							<h6>Not registred yet?</h6>
							<a href='#' class='toggle'>Sign up</a>
						</div> <?php

									if (isset($errors) && !empty($errors)) {
										echo "<p class='error'>Invalid Username / Password</p>";
									}

									if (isset($_GET['logout'])) {
										echo "<p class='info'>You have successfully logged out from the system</p>";
									}

									?>

						<div class='actual-form'>
							<div class='input-wrap'>
								<input type='text' name='user_name' minlength='4' class='input-field' autocomplete='off' required />
								<label>Name</label>
							</div>

							<div class='input-wrap'>
								<input type='password' name='user_password' minlength='4' class='input-field' autocomplete='off' required />
								<label>Password</label>
							</div>

							<p class='text fpassword' style='margin-block-end: 1rem;'>
								<a href='../landingPage/forgotPassword.php'>Forgotte password?</a>
							</p>


							<input type='submit' name='loginSubmit' value='Sign In' class='sign-btn' />

							<p class='text'>
								Sign in will gives you power to be the BatMan.
							</p>
						</div>
					</form> <?php


								if (!empty($errors)) {

									errorDisplay($errors);
								}

								?>

					<form action='../landingPage/index.php' method='post' autocomplete='off' class='sign-up-form'>
						<div class='logo-s'>
							<img src='../images/logo.png' alt='SUJCS' />
						</div>

						<div class='heading'>
							<h2>Get Started</h2>
							<h6>Already have an account?</h6>
							<a href='#' class='toggle'>Sign in</a>
						</div>

						<div class='actual-form'>
							<div class='input-wrap'>
								<input type='text' name='user_name' minlength='4' class='input-field' autocomplete='off' required />
								<label>Name</label>
							</div>

							<div class='input-wrap'>
								<input type='email' name='user_email' class='input-field' autocomplete='off' required />
								<label>Email</label>
							</div>

							<div class='input-wrap'>
								<input type='password' name='user_password' minlength='4' class='input-field' autocomplete='off' required />
								<label>Password</label>
							</div>


							<input type='submit' name='submit' value='Sign Up' class='sign-btn' style='margin-top: 3rem;' />

							<p class='text'>
								By signing up, I agree to the
								<a href='#'>Terms of Services</a> and
								<a href='#'>Privacy Policy</a>
							</p>
						</div>
					</form>
				</div>

				<div class='carousel'>

					<div class='images-wrapper'>
						<img src='../images/lp_sub1.png' class='image img-1 show' alt='' />
						<img src='../images/about3.png' class='image img-2' alt='' />
					</div>

					<div class='text-slider'>
						<div class='text-wrap'>
							<div class='text-group'>
								<h2>Sign in to save your selections</h2>
								<h2>Register to access more features</h2>
							</div>
						</div>

						<div class='bullets'>
							<span class='active' data-value='1'></span>
							<span data-value='2'></span>
						</div>
					</div>

				</div>

			</div>

		</div>
	</main>

<?php

}



// replacement search bar

function search() {
    echo "
    <div class='search_container'>
        <form action='../searchPage/searchPage.php' method='GET' class='search-form'>
    
            <input class='input' type='text' placeholder='Search here' name='search_data'>
            <button type='submit' class='search_btn btn' name='search_data_journal'><ion-icon name='search'></ion-icon></button>  

        </form>
    </div>

    ";
}




function footer() {
    echo "
    <div class='section footer'>
        <div class='container-2'>

            <div class='content'>
                <div class='logo-footer'>
                    <img src='../images/logo.png' alt='SUJCS-logo'>
                </div>

                <div class='address'>
                    <h4>Postal Address</h4>
                    <p class='add'>
                        Sabaragamuwa University of Sri Lanka,<br>
                        P.O. Box 02,<br> 
                        Belihuloya,<br>
                        70140,<br>
                        Sri Lanka.
                    </p>
                </div>

                <div class='contact'>
                    <h4>Contact Us</h4>
                    <ul>
                        <li><img class='media-icon' src='../images/facebook1.png' alt='icon'><a href='#'>Facebook</a></li>
                        <li><img class='media-icon' src='../images/instagram1.png' alt='icon'><a href='#'>Instagram</a></li>
                        <li><img class='media-icon' src='../images/phone.png' alt='icon'><a href='#'>LinkdIn</a></li>
                        <li><img class='media-icon' src='../images/mail.png' alt='icon'><a href='#'>Mail</a></li>
                    </ul>
                </div>
            </div>

            <div class='copy-right'>
                <p class='note'>Copyright © 2021 - Sabaragamuwa University Journal of Computer Sciences.</p>
                <h6>ALL RIGHTS RESERVED</h6>
            </div>

        </div>
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
                $image = $row['journal_image'];
    
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
                        <button class='b-mark'><a href='../userProfile/userProfile.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
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
                <button class='b-mark'><a href='../userProfile/userProfile.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
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
                <button class='b-mark'><a href='../userProfile/userProfile.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
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
                <button class='b-mark'><a href='../userProfile/userProfile.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
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




function searchBar() {
    global $con;

    // condition to check isset or not
    if(isset($_GET['search_data_journal'])) {

        $search_data_value = $_GET['search_data'];

            $search_query = "Select * from journals where journal_keyword like '%$search_data_value%'"; //limit 0,5
            $result_query = mysqli_query($con, $search_query);
            // $row = mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];

            // count the num of rows resent in the database
            $num_of_rows = mysqli_num_rows($result_query);
            if($num_of_rows == 0) {
                echo "<h3 class='text-center'>No matching search results</h3>";
            }

            while($row = mysqli_fetch_assoc($result_query)){
                $title = $row['journal_title'];
                $publishDate = $row['journal_publish_date'];
                $pdf = $row['journal_pdf'];
                $journalTypeId = $row['journal_type_id'];
                $cat = $row['category_id'];
                $author = $row['author_name'];
                $image = $row['journal_image'];
    
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
                        <button class='b-mark'><a href='../userProfile/userProfile.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
                        </div>
                        <div class='download'>
                            <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
                        </div>
                    </div>
                </div>";
            }
        
    }
}



// add to the bookmark
// function addBookmark(){

//     global $con;


//     if (!isset($_SESSION['user_id'])) {
//         // Redirect to login page or handle as needed
//         header("Location: ../landingPage/index.php");
//         exit();
//     }
    
//     // Handle bookmarking
//     if (isset($_GET['bookmark'])) {
//         $user_id = $_SESSION['user_id'];
//         echo $user_id;
//         $category_id = $_GET['bookmark']; // Replace with your actual input name
//         // $article_id = $_POST['article_id']; // Replace with your actual input name
    
//         // Check if the item is already bookmarked
//         $check_query = "SELECT * FROM bookmark WHERE user_id = $user_id AND category_id = $category_id";
//         $check_result = mysqli_query($con, $check_query);
    
//         if (mysqli_num_rows($check_result) == 0) {
//             // Item is not bookmarked, add it to bookmarks
//             $bookmark_query = "INSERT INTO bookmark (user_id, category_id) VALUES ($user_id, $category_id)";
//             mysqli_query($con, $bookmark_query);
//             echo "Item bookmarked successfully!";
//         } else {
//             // Item is already bookmarked, you can remove it or show a message
//             echo "Item is already bookmarked!";
//         }
//     }


// }





// select profile journals 

// function profileJournals(){

//     global $con;
    
//     if(isset($_GET['category_id'])){
//         $categoryId = $_GET['category_id'];
        
//         // SQL query to select details from journals table based on bookmark category_id
//         $sql = "SELECT journals.* FROM journals
//                 INNER JOIN bookmark ON journals.user_id = bookmark.user_id
//                 WHERE bookmark.category_id = $categoryId";
    
//         $result = mysqli_query($con, $sql);

//         $num_of_rows = mysqli_num_rows($result);
//         if($num_of_rows == 0) {
//             echo "<h3 class='text-center'>No related documents for this category</h3>";
//         }
    
//         // Fetching and processing the results
//         while($row = mysqli_fetch_assoc($result)){
//             $title = $row['journal_title'];
//             $publishDate = $row['journal_publish_date'];
//             $pdf = $row['journal_pdf'];
//             $journalTypeId = $row['journal_type_id'];
//             $cat = $row['category_id'];
//             $author = $row['author_name'];
//             $image = $row['journal_image'];

//             // Fetch type_name from journal_types table
//             $sqlType = "SELECT * FROM `journal_types` WHERE type_id ='$journalTypeId'";
//             $resultType = mysqli_query($con, $sqlType);
//             $rowType = mysqli_fetch_assoc($resultType);
//             $typeName = ($rowType) ? $rowType['type_name'] : '';
        
//             echo "
//             <div class='article-card'>
//         <!-- article image -->
//         <div class='card-img'>
//             <img src='../images/$image' alt=''>
//         </div>
//         <!-- article title -->
//         <div class='a-title'>
//             <p class='p title'>$title</p>
//             <p class='p sub-title'>$author, $publishDate</p>
//         </div>
//         <!-- user action -->
//         <div class='btn-access'>
//             <div class='book-mark'>
//                 <button class='b-mark'><a href='../function/bookmark.php?bookmark=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
//             </div>
//             <div class='download'>
//                 <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
//             </div>
//         </div>
//     </div>";
//         }
//     }
    
    

   

      
//     }







?>



