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
  <link rel="stylesheet" href="./organizationOM.css">
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


  <section class="section">

    <div class="container-2">

        <h5><b>Review Process</b></h5>
        <p style="color: grey;" ,style="text-align: justify;">Submitted manuscripts undergo an initial assessment, where
          they are evaluated for thematic relevance and content quality. Manuscripts not adhering to the author guidelines will be returned to the author without further processing.</p>
        <p style="color: grey;" ,style="text-align: justify;">Manuscripts that successfully clear the initial screening
          proceed through a double-blind peer-review procedure. The Editor in Chief, in collaboration with the Coordinating Editor, assigns three reviewers from the same or a related field
          to conduct the evaluation based on predetermined criteria. The final acceptance or rejection decision for the paper is
          determined by the Editor in Chief and the editorial team, taking into consideration the evaluation reports provided by the
          reviewers.</p>

        <h5><b>Copyright</b></h5>
        <p style="color: grey;">Copyright on any research article in the SUJCS is retained by the author(s).</p>
        <div class="copyright" style="margin-left: 6rem;">
            
            <p></p> <!-- Empty paragraph for space -->
            <p style="color: grey;">1. The authors grant SUJCS a license to publish the article and to identify itself as the
              original publisher.</p>
            <p></p> <!-- Empty paragraph for space -->
            <p style="color: grey;">2. Articles in the SUJCS are Open Access articles published under the Creative Commons CC
              BY-SA License (https://creativecommons.org/licenses/by-sa/4.0/).</p>
            <p style="color: grey;">3. This license permits use distribution and reproduction in any medium provided which is
              licensed under the same terms and the original work is properly cited.</p>
        </div>

        <h5><b>Copyright Notice</b></h5>
        <p style="color: grey;">Copyright on any research article in the SUJCS is retained by the author(s). Articles in the
          SUJCS are Open Access articles published under the Creative Commons CC BY-SA License (https://creativecommons.org/licenses/by-sa/4.0/ ). 
          The authors grant SUJCS a license to publish the article and identify itself as the original publisher. This
          license permits use, distribution and reproduction in any medium, provided it is licensed under the same terms and the original work is
          properly cited.</p>

        <h5><b>Declaration of interest</b></h5>
        <p style="color: grey;">All authors must disclose any financial and personal relationships with other people or
          organizations that could inappropriately influence (bias) their work. Authors should complete the declaration of interest statement using this template and
          upload it to the submission system at the step, Attach/Upload Files. If there are no interests to declare, please choose: 'Declarations of interest: none' in the template. This statement will be published within the
          article, if it is accepted.</p>
        <p></p> <!-- Empty paragraph for space -->

        <!-- White color box -->
        <!-- <div class="white-box"></div> -->
        <hr style="margin-top: 5rem;">

            <h5><b>Submission Guidelines</b></h5>
            <p>Submit each manuscript through email to SUJCS@sab.ac.lk. Include a cover letter affirming
              that the original research has not been submitted for publication elsewhere and is not already published.</p>
            <p>You can use this list to carry out a final check of your submission before you send it to
              the journal for review.</p>

            <p>One author has been designated as the corresponding author with contact details:</p>

            <div class="copyright" style="margin-left: 6rem;">
            
              <p>1.E-mail address</p>
              <p>2.Full postal address</p>

            </div>


            <h5><b>Preperation</b></h5>

            <div class="copyright" style="margin-left: 6rem;">
            
                <p><b>Use of word processing software</b></p>
                <p>Saving the file in the original word processor's native format is essential. Ensure the text
                  is formatted in a single-column layout, keeping the overall text layout as straightforward as possible. During the article processing, the
                  majority of formatting codes will be eliminated and substituted as needed.</p>

                <p><b>Source File</b></p>
                <p>It is mandatory to include the source files during the initial submission of your manuscript in the system.</p>
                <p><b>LaTex</b></p>
                <p>You are recommended to use the article class SUCSJ.cls () to prepare your manuscript and BibTeX (http://www.bibtex.org) to generate your bibliography.</p>
                
                <p><b>Style</b></p>
                <p>Prepare manuscripts following the specified style guidelines to avoid publication delays.
                  Use double spacing on one side of 8.5 x 11-inch or A4 white paper for the entire manuscript. Ensure consecutive page numbering and organize the
                  paper as outlined below.</p>
                <p><b>Vitae</b></p>
                <p>Please supply concise biographies (up to 100 words each) for the authors, along with
                  passport-sized photographs alongside other images. Share the biographies in an editable format like Word, not in PDF.</p>
            </div>

            



            <h5><a style="color: #3F37C9;" href="https://example.com">Organization Of Manuscript </a> </h5>
            <!-- Two-column bullet list -->
            <ul class="two-column-list guid-list" style="margin-bottom: 8rem;">
              <!-- <li><a href="#">Language </a></li>
              <li><a href="#">Length of Paper </a></li>
              <li><a href="#">Title Page</a></li>
              <li><a href="#">Abstract</a></li>
              <li><a href="#">Key Words</a></li>
              <li><a href="#">Introduction</a></li>
              <li><a href="#">Literature Review</a></li>
              <li><a href="#">Materials & Methods</a></li>
              <li><a href="#">Results & Discussion</a></li>
              <li><a href="#">Conclusion</a></li>
              <li><a href="#">Sub-division of the Article</a></li>
              <li><a href="#">Tables & Figures</a></li>
              <li><a href="#">Acknowledgments</a></li>
              <li><a href="#">Reference List</a></li> -->


              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Language </a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i><p><a href="#">Length of Paper</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Title Page</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i><p><a href="#">Abstract</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Key Words</a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Introduction </a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i><p><a href="#">Literature Review</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Materials & Methods</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i><p><a href="#">Results & Discussion</a></p>
              </li>

              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Conclusion</a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Sub-division of the Article</a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Tables & Figures</a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Acknowledgments</a></p>
              </li>
              <li class="guid-items">
                  <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Reference List</a></p>
              </li>
            </ul>

        </div>

</section>



  <?php
	footer();
	?>

	<script src="../reuseComponents/navBar.js"></script>
	<script src="../signIn/sign.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>