
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="gaya.css" />
		<script src="java.js" defer></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
		<title>Posttest 3</title>
	</head>
	<body> 
		<!-- navbar -->
		<div class="navbar"> 
			<div class="twece-brand">TwentyOnce</div>
			<!-- <span class="fs-4">{{ Auth::user()->name ?? 'Home Page' }}</span> -->
			
			<div class="toggle-container">
				<input type="checkbox" id="toggle" name="toggle">
				<label for="toggle"></label>
			</div>			
			
			<ul class="nav-link"> 
				<li><a href="#" class="twece-link">HOME</a></li>
				<li><a href="#" class="twece-link">ABOUT</a></li>
				<li class="nav-item">
                <a href="{{ Auth::user() ? '/logout' : '/login' }}" class="twece-link" aria-current="page">
                    {{ Auth::user() ? 'Logout' : 'Login' }}
                </a>
            	</li>
				<li><a href="#" class="twece-link">DARK MODE >>></a></li>
			</ul>
		</div>
		<!-- end -->
		
		<!-- header -->
		<section class="main"> 
			<div class="container"> 
				<div class="main-content"> 
					<div class="text"> 						
						<div id="deskripsi" class="deskripsi"> 
								<span id="kursus" class="deskripsi">INFO</span> <span id="online" class="deskripsi">GAME</span>
							</div>
						<h1> 
							Game of The Year <br/>
							<!-- Menggunakan Unity -->
							<div class="deskripsi1"> 
								Game of the Year atau yang lebih biasa disebut GotY <br/> 
								merupakan penghargaan yang diberikan oleh berbagai  <br/> 
								acara penghargaan untuk video game yang dinilai sebagai <br/> 
								yang terbaik dari tahun kalender tersebut 
							</div>
						</h1>
						<div class="btn-get-started"> 
							<a href="/games" class="btn">Data</a>
							<a href="#" class="btn2">More Info</a>
						</div>
					</div>					
				</div>
				<div class="banner"> 
					<img src="IMG/anim.svg" height="320px" />
				</div>
			</div>
		</section>
		<!-- end -->


        <!-- <div class="more-info"> 
            <h2> Tes </h2>
        </div> -->
		
		

		<!-- footer -->
		<footer class="footer">
			<div class="container"> 	
				<div class="footer"> 
					<p id="footer0">© 2020 Daffa. All Rights Reserved </p>
				</div>
				<div class="footer2">
					<a class="icon" href="https://www.instagram.com/_mdpm_/"><i class='bx bxl-instagram'></i></a>
					<a class="icon" href="https://web.facebook.com/MuhammadMahardika/"><i class='bx bxl-facebook'></i></a>
					<a class="icon" href="http://wa.me/6282251266939"><i class='bx bxl-whatsapp'></i></a>
				</div>
			</div>
		</footer>
		<!-- end -->
	</body>
</html>

