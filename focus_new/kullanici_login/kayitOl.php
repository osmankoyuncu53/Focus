<?php include "../netting/baglan.php"; ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Lotus Kayıt Panel</title>
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
					<h2 class="heading-section">Lotus Kayıt Panel</h2>
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
			      			<h3 class="mb-4">Kayıt Ol</h3>
			      		</div>
								<div class="w-100">
									
								</div>
			      	</div>
							<form action="netting/islem.php" method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Ad Ve Soyad</label>
			      			<input type="text" class="form-control" name="txt_kayitAdSoyad" placeholder="Adınızı ve Soyadınızı giriniz..." required>
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Kullanıcı Adı</label>
			      			<input type="text" class="form-control" name="txt_kayitKullaniciAdi" placeholder="Kullanıcı adınızı giriniz..." required>
			      		</div>

			      		<div class="form-group mb-3">
		            	<label class="label" for="password">Şifre</label>
		              <input type="password" class="form-control" name="txt_kayitSifre" placeholder="Şifrenizi giriniz..." required>
		            </div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Mail Adresi</label>
			      			<input type="email" class="form-control" name="txt_kayitMail" placeholder="Mail Adresinizi giriniz..." required>
			      		</div>

		            
		            <div class="form-group">
		            	<button type="submit" name="btn_kayitOl" class="form-control btn btn-primary rounded submit px-3">Kayıt Ol</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            
									</div>
									<div class="w-50 text-md-right">
										
									</div>
		            </div>
		          </form>
		          <p class="text-center">Giriş Ekranına Dön <a href="index.php">Giriş Yap</a></p>
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

