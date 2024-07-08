<?php
include('../connection.php');
include('../function/commonFunction.php');
include('../function/userFunction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Reviews | Sabaragamuwa University of Sri Lanka</title>
  <link rel="icon" href="../images/tab_logo.png">
  <meta name="title" content="SUJCS - Sabaragamuwa University Journal of Computer Science">
  <meta name="description" content="Official website of faculty of computer science">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==
      " crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./organizationOM.css">
  <link rel="stylesheet" href="../reuseComponents/navBar.css">
  <link rel="stylesheet" href="../reuseComponents/search.css">
  <link rel="stylesheet" href="../SignIn/sign.css">
  <link rel="stylesheet" href="../reuseComponents/footer.css">
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
    <div style="margin-top: 150px;"></div>

  <!-- <link rel="stylesheet" href="organizationOM.css"> -->
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
  <section class="section">

      <!-- categories content -->
      <div class="container-2">

          <h5><b>Language</b></h5>

          <p>The language of the manuscript must be in English (British standard).</p>

          <h5><b>Length of Paper</b></h5>

          <p>The paper's length must fall within the range of 7000 to 10000 words, encompassing the
            references and annexures. Any submission exceeding 10000 words will be declined. Articles should be typed in 12-point Times New Roman font, with 1.5 line
            spacing, on one side of A4 paper, maintaining normal margins (Top 1”, Bottom 1”, Left 1”, and Right 1”). Authors are encouraged to express
            ideas concisely while ensuring clarity in their writing.</p>

          <h5><b>Title Page</b></h5>

          <p style="margin-bottom: 3rem;">The Title page is a separate page before the text. It should include the following information:</p>

        <div class="subtopics">

            <p><b>Title</b></p>
            <p style="margin-bottom: 3rem;">The title should be concise and informative. Abbreviations and formulae should be avoided where possible.</p>

            <p><b>Author’s Names & Affiliations</b></p>
            <p style="margin-bottom: 3rem;">Please provide the author's initials followed by their last name. Include the authors'
              affiliation addresses (the location where the research was conducted) beneath their names. Use lowercase superscript letters to denote each
              affiliation, corresponding to the appropriate address. Include the complete postal address for each affiliation, including
              the country,and provide the email address for each author.</p>

            <p><b>Corresponding Author</b></p>
            <p>Specify individuals who are ready to manage communication throughout the entire peer review
              process, publication and post-publication. Include their email addresses, complete postal addresses, and telephone numbers with<br>
              country and area codes.</p>

        </div>

        <p></p> <!-- Empty paragraph for space -->


        <h5><b>Abstract</b></h5>
        <p>Compose a brief and professional summary of the research within a 250-word limit. Clearly
          state the research purpose, highlight principal findings, and summarize key conclusions. Avoid including references in this standalone abstract.</p>

        <h5><b>Key Words</b></h5>
        <p>Immediately after the abstract, a maximum of 5 keywords, avoiding general and plural terms
          and multiple concepts (Ex:'and', 'of') should be provided. Keywords should be presented. The keywords should be arranged in
          alphabetical order.</p>

        <h5><b>Literature Review</b></h5>
        <p>This section should provide a sufficient evaluation of the theoretical/empirical literature
          to identify the knowledge gaps.</p>

        <h5><b>Materials and Methods</b></h5>
        <p>This section should contain adequate and detailed information of all the procedures and
          steps followed.</p>

        <h5><b>Results & Discussion</b></h5>
        <p>This section should describe the results and the outputs of the research work.</p>

        <h5><b>Conclusions</b></h5>
        <p>This section should clearly explain the important conclusions of the work highlighting its
          significance, relevance and values.</p>

        <h5><b>Sub-division of the Article</b></h5>
        <p>This section should clearly explain the important conclusions of the work highlighting its
          significance, relevance and values.</p>

        <h5><b>Tables and Figures</b></h5>
        <p>This section should clearly explain the important conclusions of the work highlighting its
          significance, relevance and values.</p>

        <div class="subtopics">

            <p><b>Table</b></p>
            <p>Number the tables sequentially using Arabic numerals, following the order of their
              appearance in the text. Present each table on an individual page with double-spacing, accompanied by a brief descriptive title placed directly above it.
              Include necessary footnotes below the tables. Authors are required to submit intricate tables in a print-ready format."</p>
            <p><b>Figures</b></p>
            <p>Prepare figures in a polished state suitable for publication. Assign Arabic numerals to
              each figure and note the top and authors on the back of each. Lettering on illustrations should be of professional quality or generated through
              high-resolution computer graphics, ensuring it is large enough for suitable reduction in publication. Avoid embedding figures within the
              text. Acceptable digital artwork should have a minimum resolution of 300 dpi and be in eps or TIFF formats. For comprehensive
              guidelines on creating electronic artwork, please refer to our website at
              https://www.elsevier.com/artwork-and-media-instructions.</p>

        </div>

        <h5><b>Acknowledgement</b></h5>
        <p>If the research is sponsored or supported by an organization, please indicate it.</p>

        <h5><b>Reference List</b></h5>

        <div class="subtopics">

            <p><b>Citation in Text</b></p>
            <p>Match citations in the text with entries in the reference list. Provide full references for
              abstract citations. Avoid including unpublished. results or personal communications in the reference list, but if necessary, use
              standard referencing with 'Unpublished Results' or ' Personal Communication.' Note that 'in press' means the item has been accepted for publication.</p>
            
            <p><b>References</b></p>
            <p>When citing online sources, provide the complete URL and mention the date you last accessed
              the information. If available, include additional details such as DOI, author names, publication dates, or source references. You can choose to list
              web references separately or integrate them into the main reference list.</p>
            <p><b>Data Reference</b></p>
            <p>This journal encourages authors to mention and reference relevant datasets in their
              manuscripts. When citing datasets, include author names, dataset title, data repository, version (if applicable), year, and a global persistent identifier in the
              Reference List. Insert [dataset] before the reference to indicate it as a data reference; however, this identifier won't appear in the published
              article.</p>

        </div>


        <h5><a style="color: #3F37C9;" href="https://example.com">Submission Preparation Checklist</a></h5>
    <!-- Two-column bullet list -->

        <div class="subtopics" style="margin-bottom: 8rem;">

            <ul class="guid-list">
                <li class="guid-items">
                    <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Declaration & Verification </a></p>
                </li>
                <li class="guid-items">
                    <i class="fa-solid fa-arrow-right"></i><p><a href="#">Changes to Authorship</a></p>
                </li>

                <li class="guid-items">
                    <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Privacy Statement</a></p>
                </li>

                <li class="guid-items">
                    <i class="fa-solid fa-arrow-right"></i><p><a href="#">Plagiarism Policy</a></p>
                </li>

                <li class="guid-items">
                    <i class="fa-solid fa-arrow-right"></i> <p><a href="#">Author’s Requirement to Sign in ORCID</a></p>
                </li>
              </ul>
        </div>

      </div>

  </section>

  <!-- Footer ------------------------------- -->
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