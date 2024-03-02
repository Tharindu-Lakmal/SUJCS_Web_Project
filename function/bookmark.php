<?php 
include '../connection.php';
@session_start();

global $con;


    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page or handle as needed
        header("Location: ../landingPage/index.php");
        exit();
    }
    
    // Handle bookmarking
    if (isset($_GET['bookmark'])) {
        $user_id = $_SESSION['user_id'];
        echo $user_id;
        $category_id = $_GET['bookmark']; // Replace with your actual input name
        // $article_id = $_POST['article_id']; // Replace with your actual input name
    
        // Check if the item is already bookmarked
        $check_query = "SELECT * FROM bookmark WHERE user_id = $user_id AND category_id = $category_id";
        $check_result = mysqli_query($con, $check_query);
    
        if (mysqli_num_rows($check_result) == 0) {
            // Item is not bookmarked, add it to bookmarks
            $bookmark_query = "INSERT INTO bookmark (user_id, category_id) VALUES ($user_id, $category_id)";
            mysqli_query($con, $bookmark_query);
            echo "Item bookmarked successfully!";
        } else {
            // Item is already bookmarked, you can remove it or show a message
            echo "Item is already bookmarked!";
        }
    }
    
    // Fetching bookmarked items for the user
    $user_id = $_SESSION['user_id'];
    $fetch_query = "SELECT * FROM bookmark WHERE user_id = $user_id";
    $fetch_result = mysqli_query($con, $fetch_query);
    
    // Loop through the result to display bookmarks
    while ($row = mysqli_fetch_assoc($fetch_result)) {
        $category_id = $row['category_id'];
       
    
        // Display your bookmarked items as needed
        echo "<p>Journal ID: $category_id</p>";
    }


?>