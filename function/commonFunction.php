<?php

include '../connection.php';
@session_start();


function errorDisplay($errors)
{
	echo "<div class='errmsg'> ";
	echo "<b>There were some errors of your form.</b><br>";
	foreach ($errors as $error) {
		$error = ucfirst(str_replace("_", " ", $error));
		echo '- ' . $error . '<br>';
	}
	echo " </div> ";
}

// Navigation Bar --------------------------------------------------------------------

function navBar()
{ ?>
	<div class='container'>
		<a href='../landingPage/index.php' class='logo'>
			<img src='../images/logo.png' width='64px' height='27px' alt='logo'>
		</a>

		<nav class='navbar' data-navbar>

			<div class='navbar-top'>
				<a href='../landingPage/index.php' class='logo'>
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
					<a href='../reviewPage/submissionPC.php' class='navbar-link'>Contact Us</a>
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

// <li class='navbar-item'>
//     <a href='#' class='navbar-link'>Call for Papers</a>
// </li>

// search-------------------------------

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


// Footer --------------------------------------------------------------------
function footer()
{
	echo "
    <div class='section footer' id='footer'>
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





// add to the bookmark
function addBookmark() {
    global $con;

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page
        header("Location: ../landingPage/index.php");
        exit();
    }

    // Handle bookmarking
    if (isset($_GET['bookmark'])) {
        // Get user ID
        $user_id = $_SESSION['user_id'];

        // Get category ID from URL
        $category_id = $_GET['bookmark']; 

        // Query to fetch journal ID based on category ID
        $query = "SELECT journal_id FROM journals WHERE category_id = $category_id";

        // Execute query
        $result = mysqli_query($con, $query);

        // Check if query executed successfully and returned a result
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch journal ID
            $row = mysqli_fetch_assoc($result);
            $journal_id = $row['journal_id'];

            // Check if the item is already bookmarked
            $check_query = "SELECT * FROM bookmark WHERE user_id = $user_id AND category_id = $category_id";
            $check_result = mysqli_query($con, $check_query);

            // If the item is not bookmarked, add it to bookmarks
            if (mysqli_num_rows($check_result) == 0) {
                $bookmark_query = "INSERT INTO bookmark (user_id, category_id, journal_id) VALUES ($user_id, $category_id, $journal_id)";
                mysqli_query($con, $bookmark_query);
				echo "<script>alert('Item bookmarked successfully!')</script>";
                
            } else {
				echo "<script>alert('Item is already bookmarked!')</script>";
                
            }
        } else {
			echo "<script>alert('Error: Failed to fetch journal ID.')</script>";
        }
    }
}






// select profile journals 

function profileJournals() {
    global $con;

    // Check if category_id is set in the URL
    if (isset($_GET['category_id'])) {
        // Get category_id from the URL
        $categoryId = $_GET['category_id'];
        
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            // Redirect to login page if user is not logged in
            header("Location: ../login.php");
            exit();
        }

        // Get user ID
        $userId = $_SESSION['user_id'];

        // SQL query to select details from journals table based on bookmark category_id and user_id
        $sql = "SELECT journals.* FROM journals
                INNER JOIN bookmark ON journals.journal_id = bookmark.journal_id
                WHERE bookmark.category_id = $categoryId AND bookmark.user_id = $userId";

        $result = mysqli_query($con, $sql);

        $num_of_rows = mysqli_num_rows($result);
        if ($num_of_rows == 0) {
            echo "<h3 class='text-center'>No related documents for this category</h3>";
        }

        // Fetching and processing the results
        while ($row = mysqli_fetch_assoc($result)) {
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

            // Display the article card
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
                        <button class='b-mark'><a href='../userProfile/userProfile.php?categ=$cat'><i class='fa-solid fa-bookmark' style='color: #ababab;'></i></a></button>
                    </div>
                    <div class='download'>
                        <button class='download-icon'><a href='../insertJournal/download.php?file=$pdf'><i class='fa-solid fa-download' style='color: #ababab;'></i></a></button>
                    </div>
                </div>
            </div>";
        }
    }
}






function removeBookmark(){
	global $con;

	if(isset($_SESSION['user_id']) && isset($_GET['categ'])) {
		$user_id = $_SESSION['user_id'];
		$category_id = $_GET['categ'];
	
		// Check if the bookmark exists for the user and category
		$check_query = "SELECT * FROM bookmark WHERE user_id = $user_id AND category_id = $category_id";
		$check_result = mysqli_query($con, $check_query);
	
		if (mysqli_num_rows($check_result) > 0) {
			// Bookmark exists, remove it
			$delete_query = "DELETE FROM bookmark WHERE user_id = $user_id AND category_id = $category_id";
			mysqli_query($con, $delete_query);

			echo "<script>alert('Bookmark removed successfully!')</script>";
		} 
	} 
}




?>