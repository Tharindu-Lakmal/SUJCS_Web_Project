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

	<div style="margin-top: 150px;"></div>

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
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p7.png" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. KT Rathnayake <br>
					Sabaragamuwa University of Sri Lanka
				</p>
				<a href="mailto:kapilar@appsc.sab.ac.lk">kapilar@appsc.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p8.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. H Rupasinghe <br>
					Sabaragamuwa University of Sri Lanka
				</p>
				<a href="mailto:hiruni@ssl.sab.ac.lk">hiruni@ssl.sab.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p9.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. EMUWJB Ekanayake <br>
					Uva Wellassa University of Sri Lanka
				</p>
				<a href="mailto:jayalath@uwu.ac.lk">jayalath@uwu.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p10.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. C Jayawardene <br>
					Sri Lanka Institute of Information Technology
				</p>
				<a href="mailto:chandimal.j@sliit.lk">chandimal.j@sliit.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p11.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. A Jayakody <br>
					Sri Lanka Institute of Information Technology
				</p>
				<a href="mailto:nuradhajaya@gmail.com">nuradhajaya@gmail.com</a> <br>
				<a href="mailto:anuradha.j@sliit.lk">anuradha.j@sliit.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p12.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. W Rankothge <br>
					Sri Lanka Institute of Information Technology
				</p>
				<a href="mailto:windhya.r@sliit.lk">windhya.r@sliit.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p13.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. D Nawinna <br>
					Sri Lanka Institute of Information Technology
				</p>
				<a href="mailto:dasuni.n@sliit.lk">dasuni.n@sliit.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p14.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. P Abeygunawardhana <br>
					Sri Lanka Institute of Information Technology
				</p>
				<a href="mailto:Pradeep.a@sliit.lk">Pradeep.a@sliit.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p15.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. J Jayasinghe <br>
					Wayamba University of Sri Lanka
				</p>
				<a href="mailto:jeevani@wyb.ac.lk">jeevani@wyb.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p16.png" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. C Premachandra <br>
					Shibaura Institute of Technology <br>
					Japan
				</p>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p17.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. Jiangning Wu <br>
					Dalian University of Technology <br>
					China
				</p>
				<a href="mailto:j3wu@ryerson.ca">j3wu@ryerson.ca</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p18.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. Lin Li <br>
					Wuhan University of Technology <br>
					China
				</p>
				<a href="mailto:lilin@whu.edu.cn">lilin@whu.edu.cn</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p19.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. SR Kodituwakku <br>
					University of Peradeniya <br>
					Sri Lanka
				</p>
				<a href="mailto:alukak@pdn.ac.lk">alukak@pdn.ac.lk</a> <br>
				<a href="mailto:salukak@sci.pdn.ac.lk">salukak@sci.pdn.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p20.png" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. N Kodikara <br>
					University of Colombo School of Computing <br>
					Sri Lanka
				</p>
				<a href="mailto:ndk@ucsc.cmb.ac.lk">ndk@ucsc.cmb.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p21.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Prof. PM Jayaweera <br>
					University of Sri Jayewardenepura <br>
					Sri Lanka
				</p>
				<a href="mailto:Prasad@dscs.sjp.ac.lk">Prasad@dscs.sjp.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p22.png" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. TGI Fernando <br>
					University of Sri Jayewardenepura <br>
					Sri Lanka
				</p>
				<a href="mailto:tgi@sjp.ac.lk">tgi@sjp.ac.lk</a> <br>
				<a href="mailto:tgi.fernando@gmail.com">tgi.fernando@gmail.com</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p23.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. KASN Sumathipala <br>
					University of Moratuwa <br>
					Sri Lanka
				</p>
				<a href="mailto:sagaras@uom.lk">sagaras@uom.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p24.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. SR Liyanage <br>
					University of Kelaniya <br>
					Sri Lanka
				</p>
				<a href="mailto:sidath@kln.ac.lk">sidath@kln.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p25.png" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. C Rajapakse <br>
					University of Kelaniya <br>
					Sri Lanka
				</p>
				<a href="mailto:chathura@kln.ac.lk">chathura@kln.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p26.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. K Thabotharan <br>
					University of Jaffna <br>
					Sri Lanka
				</p>
				<a href="mailto:thabo@jfn.ac.lk">thabo@jfn.ac.lk</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p27.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. RD Nawarathna <br>
					University of Peradeniya <br>
					Sri Lanka <br>
				</p>
				<a href="mailto:ruwand@pdn.ac.lk">ruwand@pdn.ac.lk</a> <br>
				<a href="mailto:ruwan.nawarathna@gmail.com">ruwan.nawarathna@gmail.com</a>
			</div>
		</div>
		<div class="profile">
			<div class="card">
				<img src="../images/popular-articles/p28.jpg" alt="">
			</div>
			<div class="text">
				<h2></h2>
				<p>
					Dr. L Ranathunga <br>
					University of Moratuwa <br>
					Sri Lanka
				</p>
				<a href="mailto:lochandaka@uom.lk">lochandaka@uom.lk</a>
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