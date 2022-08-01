<?php include "../netting/baglan.php"; ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Lotus Login Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Lotus Login Panel</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Giriş Yap</h3>
			      		</div>
								<div class="w-100">
									
								</div>
			      	</div>
							<form action="netting/islem.php" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Kullanıcı Adı</label>
			      			<input type="text" class="form-control" name="txt_girisKullaniciAd" placeholder="Kullanıcı adınızı giriniz..." required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Şifre</label>
		              <input type="password" class="form-control" name="txt_girisSifre" placeholder="Şifrenizi giriniz..." required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="btn_girisYap">Giriş Yap</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            
									</div>
									<div class="w-50 text-md-right">
										
									</div>
		            </div>
		          </form>
		          <p class="text-center">Hâlâ üye değilmisin? <a href="kayitOl.php">Kayıt Ol</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

