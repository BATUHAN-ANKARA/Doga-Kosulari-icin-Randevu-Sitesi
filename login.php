
<?php 

require_once 'baglan.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Giriş Yap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css1/style1.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images1/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Giriş Yap</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Henüz Üye Değilsen Kayıt Ol</h3>
		      	<form action="islem.php" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Eposta" name="kullanici_mail" required="">
		      		</div>
	            <div class="form-group">
	              <input id="password-field"  class="form-control" placeholder="Şifre" name="kullanici_sifre" required="">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="kullanicigiris" class="form-control btn btn-primary submit px-3">Giriş Yap</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="signup.html" style="color: #fff">Kayıt ol</a>
								</div>
	            </div>
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js1/jquery1.min.js"></script>
  <script src="js1/popper1.js"></script>
  <script src="js1/bootstrap1.min.js"></script>
  <script src="js1/main1.js"></script>

	</body>
</html>

