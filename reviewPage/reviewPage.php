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

	<title>SUJCS | Sabaragamuwa University of Sri Lanka</title>
	<link rel="icon" href="../images/tab_logo.png">
	<meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
	<meta name="description" content="Official website of faculty of computer science">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../reuseComponents/navBar.css">
	<link rel="stylesheet" href="../reuseComponents/search.css">
	<link rel="stylesheet" href="../SignIn/sign.css">
	<link rel="stylesheet" href="../reuseComponents/footer.css">
	<link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="styles.css">
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

<body>
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
  </nav> -->

  <!-- <div class="title-container">
    <h3>Find Articles</h3>
    <div class="search-container">
      <input type="text" placeholder="Search here">
      <button type="submit">Search</button>
    </div>
  </div> -->

  <header>
    <h4 style="font-size: 22px;", ><b>Review Process</b></h4>
    <p style="color: grey;" ,style="text-align: justify;">Submitted manuscripts undergo an initial assessment, where
      they are evaluated for thematic relevance and content quality. <br>
      Manuscripts not adhering to the author guidelines will be returned to the author without further processing.</p>
    <p style="color: grey;" ,style="text-align: justify;">Manuscripts that successfully clear the initial screening
      proceed through a double-blind peer-review procedure. The Editor <br>
      in Chief, in collaboration with the Coordinating Editor, assigns three reviewers from the same or a related field
      to conduct <br>
      the evaluation based on predetermined criteria. The final acceptance or rejection decision for the paper is
      determined by the <br>
      Editor in Chief and the editorial team, taking into consideration the evaluation reports provided by the
      reviewers.</p>
    <h4 style="font-size: 22px;"><b>Copyright</b></h4>
    <p style="color: grey;">Copyright on any research article in the SUJCS is retained by the author(s).</p>
    <p></p> <!-- Empty paragraph for space -->
    <p style="color: grey;">1. The authors grant SUJCS a license to publish the article and to identify itself as the
      original publisher.</p>
    <p></p> <!-- Empty paragraph for space -->
    <p style="color: grey;">2. Articles in the SUJCS are Open Access articles published under the Creative Commons CC
      BY-SA License<br>
      (https://creativecommons.org/licenses/by-sa/4.0/).</p>
    <p style="color: grey;">3. This license permits use distribution and reproduction in any medium provided which is
      licensed under the<br>
      same terms and the original work is properly cited.</p>
    <h4 style="font-size: 22px;"><b>Copyright Notice</b></h4>
    <p style="color: grey;">Copyright on any research article in the SUJCS is retained by the author(s). Articles in the
      SUJCS are Open Access<br>
      articles published under the Creative Commons CC BY-SA License (https://creativecommons.org/licenses/by-sa/4.0/ ).
      <br>
      The authors grant SUJCS a license to publish the article and identify itself as the original publisher. This
      license permits use,<br>
      distribution and reproduction in any medium, provided it is licensed under the same terms and the original work is
      properly cited.</p>
    <h4 style="font-size: 22px;"><b>Declaration of interest</b></h4>
    <p style="color: grey;">All authors must disclose any financial and personal relationships with other people or
      organizations that could inappropriately<br>
      influence (bias) their work. Authors should complete the declaration of interest statement using this template and
      upload it to<br>
      the submission system at the step, Attach/Upload Files. If there are no interests to declare, <br>
      please choose: 'Declarations of interest: none' in the template. This statement will be published within the
      article, if it is accepted.</p>
    <p></p> <!-- Empty paragraph for space -->

    <!-- White color box -->
    <div class="white-box"></div>
    <h4 style="font-size: 22px;"><b>Submission Guidelines</b></h4>
    <p style="color: grey;">Submit each manuscript through email to SUJCS@sab.ac.lk. Include a cover letter affirming
      that the original research has <br>
      not been submitted for publication elsewhere and is not already published.</p>
    <p style="color: grey;">You can use this list to carry out a final check of your submission before you send it to
      the journal for review.</p>
    <p style="color: grey;">One author has been designated as the corresponding author with contact details:</p>
    <p style="color: grey;"><b>1.E-mail address</b></p>
    <p style="color: grey;"><b>2.Full postal address</b></p>
    <h4 style="font-size: 22px;"><b>Preperation</b></h4>
    <p style="color: grey;"><b>Use of word processing software</b></p>
    <p style="color: grey;">Saving the file in the original word processor's native format is essential. Ensure the text
      is formatted in a single-column<br>
      layout, keeping the overall text layout as straightforward as possible. During the article processing, the
      majority of<br>
      formatting codes will be eliminated and substituted as needed.</p>
    <p style="color: grey;"><b>Source File</b></p>
    <p style="color: grey;">It is mandatory to include the source files during the initial submission of your manuscript
      in the system.</p>
    <p style="color: grey;"><b>LaTex</b></p>
    <p style="color: grey;">You are recommended to use the article class SUCSJ.cls () to prepare your manuscript and
      BibTeX (http://www.bibtex.org)<br>
      to generate your bibliography.</p>
    <p style="color: grey;"><b>Style</b></p>
    <p style="color: grey;">Prepare manuscripts following the specified style guidelines to avoid publication delays.
      Use double spacing on one side of<br>
      8.5 x 11-inch or A4 white paper for the entire manuscript. Ensure consecutive page numbering and organize the
      paper as outlined below.</p>
    <p style="color: grey;"><b>Vitae</b></p>
    <p style="color: grey;">Please supply concise biographies (up to 100 words each) for the authors, along with
      passport-sized photographs<br>
      alongside other images. Share the biographies in an editable format like Word, not in PDF.</p>
  </header>
  <h4 style="font-size: 22px;, <span style="position: relative; left: 50px;></span><a style="color: #3F37C9;" href="https://example.com">Organization Of Manuscript </a>
  </h4>
  <!-- Two-column bullet list -->
  <ul class="two-column-list">
    <li><a style="color: #3F37C9;" href="https://example.com">Language </a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Length of Paper </a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Title Page</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Abstract</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Key Words</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Introduction</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Literature Review</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Materials & Methods</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Results & Discussion</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Conclusion</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Sub-division of the Article</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Tables & Figures</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Acknowledgments</a></li>
    <li><a style="color: #3F37C9;" href="https://example.com">Reference List</a></li>
  </ul>

  <?php
	footer();
	?>

	<script src="../reuseComponents/navBar.js"></script>
	<script src="../signIn/sign.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>