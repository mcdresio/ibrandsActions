<!doctype html>
<html lang="es">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">

<title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h1 class="text-center">Test ibrands</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<h3 class="text-center"><?php echo 'Total de acciones: '.count($actions).'<br>';?></h3>
			</div>
			<div class="col-sm">
				<h3 class="text-center"><?php echo 'Suma de las puntuaciones: '.$suma_acciones.'<br>';?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Type</th>
							<th scope="col">User</th>
							<th scope="col">Score</th>
						</tr>
						<?php
						foreach ($actions as $act){
						?>
						<tr>
							<th scope="row"><?php echo $act->getId(); ?></th>
							<td>
								<?php if (is_a($act, 'Apertura')): ?>
                                Apertura                               
                                <?php else: ?>                              
                                Click                   
                                <?php endif ?>
							</td>
							<td><?php echo $act->getUser()->getUsername(); ?></td>
							<td scope="row"><?php echo $act->getScore(); ?></td>
						</tr>
						<?php 
						}
						?>
					</thead>
				</table>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

</body>
</html>

<?php
