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
  <!-- custom css link -->
  <link rel="stylesheet" href="./findArticles.css">
  <!-- custom navbar css link -->
  <link rel="stylesheet" href="../reuseComponents/navBar.css">
  <!-- custom search bar css link -->
  <link rel="stylesheet" href="../reuseComponents/search.css">
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

    <h4 class="find-a">Find Articles</h4>

    <!-- Search Bar ------------------------------- -->
    <?php
    search();
    ?>

  </section>

  <!-- Main heading -->
  <section class="section main">

    <!-- Top content -->
    <div class="container-2">

      <div class="main-content">
        <h4 class="h4 section-title">
          Computer Sciences and Software Engineering
        </h4>
        <p class="sub-content">
          The manuscript should contain the items mentioned hereunder.
        </p>
        <p class="sub-content">
          Title, List of authors together with affiliations.
        </p>
      </div>

      <div class="card">

        <ul class="card-list">
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Abstract & Keywords
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Introduction
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Literature Review
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Materials & Methods
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Results & Discussion
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Conclusion
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Acknowledgments (optional)
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            References
          </li>
          <li class="guid-items">
            <i class="fa-solid fa-arrow-right" style="color: #3f37c9;"></i>
            Annexures (optional)
          </li>
        </ul>

      </div>

    </div>

  </section>



 








</body>

</html>