<?php

session_start();
require_once 'db.php';

if(isset($_SESSION['admin'])){
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admin Girisi</title>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Login Formu</title>
	</head>

	<body>
		<div class="formC">
			<h2 class="title">
				Giris Yap
			</h2>
			<form action="login.php" method="post">
				<label>Kullanici Adi</label>
				<input type="text" name="kullaniciAdi" />
				<label>Parola</label>
				<input type="password" name="parola" />
				<button>Giris</button>
			</form>

			<?php

			if (isset($_POST['kullaniciAdi']) && isset($_POST['parola'])) {
				$kullaniciAdi = $_POST['kullaniciAdi'];
				$parola = $_POST['parola'];

				$admin = adminCek($kullaniciAdi);

				if ($admin) {
					if ($admin['sifre'] == $parola) {
						$_SESSION['admin'] = $admin;
						header('Location: admin/index.php');
					} else {
						echo "Parola yanlis";
					}
				} else {
					echo "Kullanici adi yanlis";
				}
			}


			?>
		</div>
	</body>

	</html>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>