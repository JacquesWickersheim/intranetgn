<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
	<?php include 'include/acces_intranet.php';?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Gendarmerie Nationale</title>
</head>
<body>
	<section class="container-fluid bg-dark">
		<div class="row">
			<div class="col">
				<h2 class="text-light">ANTARES</h2>
			</div>
		</div>
	</section>
	<section class="container-fluid bg-dark py-5">
		<section class="container bg-secondary text-warning text-center">
			<div class="row">
				<div class="col-md-12">
					<p>Vous vous appr&eacute;tez &agrave; entrer dans l'intranet de la Gendarmerie. L'acces est strictement interdit &agrave; toutes personnes 
					non autoris&eacute;!!</p>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-dark py-5">
		<section class="container bg-secondary text-center text-light">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-warning">Se connecter merci</h2>
				</div>
				<div class="col-md-12 pb-5">
					<form method="post">
						<div class="form-group">
							<label>Mot de passe</label>
							<input name="pass" type="password" class="form-control">
						</div>
						<button type="submit" class="btn btn-success mt-3">Se connecter</button>
					</form>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-dark fixed-bottom pt-5">
		<section class="container bg-secondary text-center text-light">
			<div class="row">
				<div class="col-md-12">
					<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Ice Life - Powered by Jacques Blake</p>
				</div>
			</div>
		</section>
	</section>
</body>
</html>