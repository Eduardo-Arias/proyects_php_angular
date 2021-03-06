<!DOCTYPE html>
<html ng-app="usuario">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" href="../media/css/bootstrap.min.css"></link>
</head>
<body ng-controller="usuarioController">
	<div class="container">
		<form action="" method="post">
			<div class="col-12">
				<div class="row">
					<div class="col-2">
						<label>Nombre</label>
					</div><!-- End col-2 nombre -->
					<div class="col-8">
						<span class="glyphicon glyphicon-user"></span>
						<input type="text" class="form-control" name="tx_nombre" ng-model="nombre">
					</div><!-- End col-8 input nombre -->
				</div><!-- End col row nombre -->
			</div><!-- End col col-12 nombre -->
			<div class="col-12">
				<div class="row">
					<div class="col-2">
						<label>Apellido Paterno</label>
					</div><!-- End col-2 apellido paterno -->
					<div class="col-8">
						<input type="text" class="form-control" name="tx_nombre" ng-model="apePat">
					</div><!-- End col-8 input apellido paterno -->
				</div><!-- End col row apellido paterno -->
			</div><!-- End col col-12 apellido paterno -->
			<div class="col-12">
				<div class="row">
					<div class="col-2">
						<label>Apellido Materno</label>
					</div><!-- End col-2 Apellido Materno -->
					<div class="col-8">
						<input type="text" class="form-control" name="tx_nombre" ng-model="apeMat">
					</div><!-- End col-8 input Apellido Materno -->
				</div><!-- End col row Apellido Materno -->
			</div><!-- End col col-12 Apellido Materno -->
			<div class="col-12">
				<div class="row">
					<div class="col-2">
						<label>Nombre de usuario</label>
					</div><!-- End col-2 Apellido username -->
					<div class="col-8">
						<input type="text" class="form-control" name="tx_nombre" ng-model="nomUser">
					</div><!-- End col-8 input username -->
				</div><!-- End col row usernane -->
			</div><!-- End col col-12 username -->
		</form><!-- -->
	</div>
	
	<script type="text/javascript" src="../media/js/angualr.min.js"></script>
</body>
</html>