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


</body>
</html>

<?php
