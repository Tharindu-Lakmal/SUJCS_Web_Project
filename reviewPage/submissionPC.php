<?php
include('../connection.php');
include('../function/commonFunction.php');
include '../function/userFunction.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Submission Contact | Sabaragamuwa University of Sri Lanka</title>
  
	<link rel="icon" href="../images/tab_logo.png">
	<meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
	<meta name="description" content="Official website of faculty of computer science">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="submissionPC.css">
  
  <link rel="stylesheet" href="../reuseComponents/navBar.css">
  <link rel="stylesheet" href="../reuseComponents/search.css">
  <link rel="stylesheet" href="../SignIn/sign.css">
  <!-- custom footer css link -->
  <link rel="stylesheet" href="../reuseComponents/footer.css">

</head>

<body>
	<header class="header " data-header>
		<?php
		signIn();
		signUp();
		navBar();
		?>
	</header>

	<section class="search">
		<?php
		search();
		?>

	</section>


  <!-- <nav class="navbar">
    <div class="container">
      <div class="logo">
        <img src="D:/work/HTML/WEB_PROJECT/SUJCS_Web_Project/images/logo.png" alt="Logo">
      </div>
      <div class="menu">
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Call for Papers</a></li>
          <li><a href="#">Review</a></li>
          <li><a href="#">Guidelines</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="buttons">
        <a href="#" class="login-btn">Login</a>
        <a href="#" class="signup-btn">Sign Up</a>
      </div>
    </div>
  </nav>

  <div class="title-container">
    <h3>Find Articles</h3>
    <div class="search-container">
      <input type="text" placeholder="Search here">
      <button type="submit">Search</button>
    </div>
  </div> -->



    <h4 style="font-size: 16px;">Submission Preparation Checklist</h4>

    <p style="color: grey;" ,style="text-align: justify;">Each manuscript should be submitted by e-mail, SUJCS@sab.ac.lk
      attached to a covering letter confirming that it describes original research not submitted for publication or already published elsewhere.</p>
    <p style="color: grey;" ,style="text-align: justify;">One author has been designated as the corresponding author with contact details:</p>

      <p style="color: grey;"><b>1. E-mail address<b></p>
      <p style="color: grey;"><b>2. Full postal address<b></p>
      <p style="color: grey;" ,style="text-align: justify;">All necessary files have been uploaded</p>
      <h5 style="font-size: 14px;">Manuscript</h5>


    <div class="subManuscript">
        <ul>
            <li style="color:grey;">Include Keywords</li>
            <li style="color:grey;">All figures (include relevant captions)</li>
            <li style="color:grey;">All tables (including titles, description, footnotes)</li>
            <li style="color:grey;">Ensure all figure and table citations in the text match the files provided</li>
            <li style="color:grey;">Indicate clearly if color should be used for any figures in print Graphical Abstracts / Highlights files (where applicable)</li>
            <li style="color:grey;">Supplemental files (where applicable)</li>
        </ul>
    </div>

    <h5 style="font-size: 14px;">Further Considerations</h5>

    <div class="subFurtherConsideration">
        <ul>
            <li style="color:grey;">The submission file is in Microsoft Word, latex file format.</li>
            <li style="color:grey;">Where available, URLs for the references have been provided.</li>
            <li style="color:grey;">Where available, DOI s for the references have been provided.</li>
            <li style="color:grey;">Manuscript has been 'spell checked' and 'grammar checked</li>
            <li style="color:grey;">All references mentioned in the Reference List are cited in the text, and vice versa</li>
            <li style="color:grey;">Permission has been obtained for use of copyrighted material from other sources (including the Internet)</li>
            <li style="color:grey;">A competing interests statement is provided, even if the authors have no competing interests to declare</li>
            <li style="color:grey;">Journal policies detailed in this guide have been reviewed</li>
            <li style="color:grey;">Referee suggestions and contact details provided</li>
        </ul>
    </div>

    <h5 style="font-size: 14px;">Declaration & Verification</h5>

    <div class="subDecleration">
      <p style="color: grey;">When submitting an article, it means that the content has not been published before (except as
        an abstract, lecture, or academic thesis). It is also not being considered for publication elsewhere, and all authors and relevant authorities where the work
        was conducted have approved its publication.</p>
    </div>

    <h5 style="font-size: 14px;">Changes to Authorship</h5>
    <div class="subChanges">
      <p style="color: grey;">Authors must carefully consider and finalize the list and order of authors when submitting
        their manuscript. Any changes to the authorship list can only be made before the manuscript is accepted, and such changes require approval from the Journal Editor.
        To request a change, the corresponding author must provide: (a) a reason for the alteration in the author list, and (b) written
        confirmation (via email or letter) from all authors expressing their agreement with the addition, removal, or rearrangement. If an author is being added or
        removed, confirmation from that specific author is also necessary.</p>
    </div>
      
    <h5 style="font-size: 14px;">Privacy Statement</h5>
    <div class="subPrivacy">
      <p style="color: grey;">The information provided in this journal, including names and email addresses, will only be
        used for the specific purposes mentioned in he journal. It will not be shared with any other party or used for any other reasons.</p>
    </div>

    <h5 style="font-size: 14px;">Plagiarism Policy</h5>
    <div class="subPlagiarism">
      <p style="color: grey;">The Sabaragamuwa University Journal of Computer Science (SUJCS) strictly prohibits plagiarism,
        data or figure manipulation, and the intentional dissemination of incorrect information. Additionally, any form of copyright infringement is not allowed. Before
        undergoing peer review, all manuscripts will undergo a thorough plagiarism check.<br>
      <p></p>
      <p style="color: grey;">The similarity below 15% is acceptable by the Journal and a similarity of >25% is considered as high percentage of plagiarism.</p>
    </div>

    <h5 style="font-size: 14px;">Author’s Requirement to Sign in ORCID</h5>
    <div class="subAuthor">
      <p style="color: grey;">Authors need to sign up for ORCID and submit these to the journal in the time of submission of
        the manuscript. More information on ORCID is available is at https://orcid.org.</p>
    </div>

    <?php
      footer();
    ?>


	<!-- custom js link-->
    <script src="../reuseComponents/navBar.js"></script>
    <script src="../signIn/sign.js"></script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>