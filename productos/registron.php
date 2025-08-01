<!DOCTYPE HTML>

<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<div class="root">
		<form acition="" class="form-register">
			<div class="form-register__header">
				<ul class="progressbar">
					<li class="progressbar__option active">paso 1</li>
					<li class="progressbar__option">paso 2</li>
					<li class="progressbar__option">paso3</li>
				</ul>
				<h1 class="form-register__title">Regustarte en Open.co</h1>
			</div>
			<div class="form-register_body">
				<div class="step active inactive" id="step-1">
					<div class="step__header">
						<h2 class="step__title">Informacion de cienta<small>( Paso1)></small></h2>
					</div>
					<div class="step_body">
						<input type="email" name="Correo" class="step__input">
						<input type="password" placeholder="Contraseña" class="step__input">
						<input type="password" palecholder="Confirmar Contraseña" class="step__input">
					</div>
					<div class="step__footer">
						<button type="button" class="step_button step_button--next" data-to_step="2" data-step="1">Sigiente</button>
					</div>
				</div>
				<div class="step" id="step-2">
					<div class="step__header">
						<h2 class="step__title">Informacion personal<small>(Paso2)</small></h2>
					</div>
					<div class="step__body">
						<input tupe="text" placeholder="Nombre" class="step__input">
						<input type="text" placeholder="Apellido" class="step__input">
						<input tipe
						tel
 placeholder="Telefono" class="step__input">
 <textarea rows="4" cols="80" placeholder="Direccion" class="step__input"></textarea>
 </div>
 <div class="step_footer">
 <button type="button" class="sten__button sten__button--next" data-to_step="3" data-step="2">Siguiente</button>
 </div>
 </div>
 <div class="step" id="step-3">
<div class="step__header">
<h2 class="step__title">Informacion zx<small>(Paso 3)</small></h2>
</div>
<div class="step__body">
	<input type="text" placeholder="Dato x" class="step__input">
	<input type="text" placeholder="Dato x" class="step__input">
	<input type="text" placeholder="Dato x" class="step__input">
</div>
<div class="step__footer">
	<button type="button" class="step__button step__button-back" data-to_step="2" data-step="3">Regresar</button>
	<button type="submit" class="step__button">Registrarse</button>

</div>
</div>
</div>
</form>
</div>
<script src="js/app.js"></script>
</body>
</html>



	