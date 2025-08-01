<?php
if(isset($_SESSION['id_vendedor'])){
	redir("./");
}
	
if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);
	$cpassword = clear($cpassword);
	$nombre = clear($nombre);
	$q = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");
	if(mysqli_num_rows($q)>0){
		
		die();
	}
	if($password != $cpassword){
		
		die();
	}
	$mysqli->query("INSERT INTO admins (username,password,name) VALUES ('$username','$password','$nombre')");
	$q2 = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");
	$r = mysqli_fetch_array($q2);
	$_SESSION['id'] = $r['id'];
	alert("Te has registrado satisfactoriamente",1,'principal');
	die();
	redir("./");
}
	?>


	<center>
		<form method="post" action="">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Registrate</h2></label>
				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirmar Contraseña" name="cpassword"/>
				</div>


				<div class="form-group">
					<input type="text" autocomplete="off" class="form-control" placeholder="Nombre" name="nombre"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in"></i> Registrate</button>
				</div>
			</div>
		</form>
	</center>