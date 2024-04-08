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

	<section class="hero-section">
		<div class="profile-container">
			<div class="profile">
				<div class="card">
					<img src="../images/popular-articles/p1.jpg" alt="">
					<div>
						From foundational computer science to new and novel research
					</div>
				</div>
				<div class="text">
					<h2>Editor in Chief</h2>
					<p>
						Dr. KPN Jayasena <br>
						Department of Software Engineering <br>
						Sabaragamuwa University of Sri Lanaka
					</p>
					<a href="mailto:pubudu@appsc.sab.ac.lk">pubudu@appsc.sab.ac.lk</a>
				</div>
			</div>
		</div>
	</section>

	<section class="profile-data">
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p2.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. S Vasanthapriyan <br>
					Sabaragamuwa University of Sri Lanka
				</p>
				<a href="mailto:priyan@appsc.sab.ac.lk">priyan@appsc.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p3.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. BTGS Kumara <br>
					Sabaragamuwa University of Sri Lanka <br>
				</p>
				<a href="mailto:kumara@appsc.sab.ac.lk">kumara@appsc.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p4.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. LS Lekamge <br>
					Sabaragamuwa University of Sri Lanka
				</p>
				<a href="mailto:slekamge@appsc.sab.ac.lk">slekamge@appsc.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p5.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. UAP Ishanka <br>
					Sabaragamuwa University of Sri Lanka
				</p>
				<a href="mailto:piumi@appsc.sab.ac.lk">piumi@appsc.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p6.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Mr. RL Dangalla <br>
					Sabaragamuwa University of Sri Lanka <br>
				</p>
				<a href="mailto:ravindra.dangalla@appsc.sab.ac.lk">ravindra.dangalla@appsc.sab.ac.lk</a>
			</div>
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