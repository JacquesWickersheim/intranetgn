<!DOCTYPE html>
<html>
	<?php 
	   include 'include/fonctions_casier.php';
	?>
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
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html">ANTARES</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="code_penal.html">Code P&eacute;nal</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="plaintes.php">D&eacute;p&ocirc;ts de Plaintes</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="civ.php">Avis de Recherches</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="gav.php">Gardes &agrave; Vues</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="casier.php">Casiers Judiciaires</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<section class="container-fluid bg-dark text-light">
		<section class="container">
			<div class="row">
				<div class="col-md-12 text-center text-light mt-2">
					<h2 class="text-warning text-center py-5">Casiers Judiciaires</h2>
				</div>
				<div class="col-md-12 text-center mt-5 text-light">
					<p>Vous pouvez ici ouvrir un casier, et y avoir acc&egrave; en temps r&eacute;el.</p>
				</div>
				<div class="col-md-12 text-center text-light">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ouvrir un Casier</button>
				</div>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header bg-dark">
								<h5 class="modal-title" id="exampleModalLabel">Casiers Judiciaires</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span>&times;</span>
								</button>
							</div>
							<div class="modal-body bg-secondary">
								<form method="post">
									<label class="text-center text-danger">Nom</label>
										<input class="form-control" id="inserer" type="text" name="nom">
									<label class="text-center text-danger">Pr&eacute;nom</label>
										<input class="form-control" id="inserer" type="text" name="prenom">
									<label class="text-center text-danger">Matricule</label>
										<input class="form-control" id="inserer" type="text" name="matricule">
									<label class="text-center text-danger">Raisons</label>
										<input class="form-control" id="inserer" type="text" name="raison">
							</div>
							<div class="modal-footer bg-dark">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
								<button type="submit" class="btn btn-primary">Valider</button>
							</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-secondary">
		<section class="container">
			<div class="row">
				<div class="table table-responsive d-flex justify-content-center">
					<table class="table table-dark">
						<tr class="text-center">
							<th>Num&eacute;ro de Casier</th>
							<th>Nom</th>
							<th>Pr&eacute;nom</th>
							<th>Matricule</th>
							<th>Raisons</th>
							<th>Action</th>
						</tr>
						<?php 
						  $reponse = $db->query('SELECT * from casier');
						  while ($casier = $reponse->fetch()){
						?>
						<tbody>
							<tr>
								<td class="text-center"><?php echo $casier['id']?></td>
								<td class="text-center"><?php echo $casier['nom']?></td>
								<td class="text-center"><?php echo $casier['prenom']?></td>
								<td class="text-center"><?php echo $casier['matricule']?></td>
								<td class="text-center"><?php echo $casier['raison']?></td>
								<td><a class="suppr" href="casier.php?supprimer_casier=<?php echo $casier['id']?>"> X</a></td>
							</tr>
							<?php }?> 
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid fixed-bottom bg-dark text-light">
		<section class="container text-center">
			<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Alsaria - Gouvernement - Gendarmerie Nationale</p>
		</section>
	</section>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>
</html>