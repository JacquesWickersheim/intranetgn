<!DOCTYPE html>
<html>
	<?php 
	   include 'include/fonctions_plainte.php';
	 ?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Gendarmerie Nationale</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">ANTARES</a>
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
				</ul>
			</div>
		</nav>		
	</header>
	<section class="container-fluid bg-dark text-light">
		<section class="container">
			<div class="row">
				<div class="col-md-12 text-center mt-2">
					<h2 class="text-warning text-center py-5">D&eacute;p&ocirc;ts de plaintes</h2>
				</div>
				<div class="col-md-12 text-center mt-5 text-light">
					<p>Vous pouvez ici enregister une plainte, et &eacute;galement relire toutes les plaintes d&eacute;pos&eacute;es en temps r&eacute;els!</p>
				</div>
				<div class="col-md-12 text-center text-light">
                	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  		Enregistrer une plainte
					</button>
				</div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-dark">
                        <h5 class="modal-title" id="exampleModalLabel">D&eacute;p&ocirc;t de plainte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body bg-secondary">
                      	<form method="POST">
                      		<label class="text-center text-danger">Nom</label><br>
                				<input class="form-control" id="inserer" type="text" name="nom">
                			<label class="text-center text-danger py-5">Pr&eacute;nom</label><br>
                				<input class="form-control" id="inserer" type="text" name="prenom">						
                			<label class="text-center text-danger py-5">Matricule du Gendarme</label><br>
                				<input class="form-control" id="inserer" type="text" name="matricule">
                			<label class="text-center text-danger py-5">Raison</label><br>
                				<input class="form-control" id="inserer" type="text" name="raison">
                			<label class="text-center text-danger py-5">Description de la Plainte</label><br>
                				<input class="form-control" id="inserer" type="text" name="description">
                      	</div>
                      <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button id="valider_plainte" type="submit" class="btn btn-primary">Valider</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-secondary text-light py-5">
		<section class="container">
			<div class="row">
				<div class="table table-responsive d-flex justify-content-center">
					<table class="table table-dark">
						<tr class="text-center">
							<th>Num&eacute;ro de la Plainte</th>
							<th>Nom</th>
							<th>Pr&eacute;nom</th>
							<th>Matricule du Gendarme</th>
							<th>Raison de la Plainte</th>
							<th>D&eacute;position</th>
							<th>Action</th>
						</tr>
						<?php 
						  $reponse = $db->query('SELECT * from plainte');
						  while ($plainte = $reponse->fetch()){
						?>
						<tbody>
							<tr>
								<td class="text-center"><?php echo $plainte['id']?>
								<td class="text-center"><?php echo $plainte['nom']?></td>
								<td class="text-center"><?php echo $plainte['prenom']?></td>
								<td class="text-center"><?php echo $plainte['matricule']?></td>
								<td class="text-center"><?php echo $plainte['raison']?></td>
								<td class="text-center"><?php echo $plainte['description']?></td>
								<td><a class="suppr" href="plaintes.php?supprimer_plainte=<?php echo $plainte['id'] ?>"> X</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid fixed-bottom bg-dark text-light">
		<section class="container text-center">
			<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Ice Life - Powered by Jacques Blake</p> 
		</section>
	</section>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>
</html>