<link rel="stylesheet" href="<?php echo SERVERURL; ?>Resource/css/Login.css">

<form data-form="" action="" method="" class="RespuestaAjax">
	<section id="login">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 col-10">
			    <h1>Login</h1>
			    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
			        <div class="form-group">
			            <label for="email" class="sr-only">Correo</label>
			            <input type="email" name="email" id="email" class="form-control" placeholder="Correo o usuario">
			        </div>
			        <div class="form-group">
			            <label for="key" class="sr-only">Contraseña</label>
			            <input type="password" name="key" id="key" class="form-control" placeholder="Contraseña">
			        </div>
			        <div class="checkbox">
			            <span class="character-checkbox" onclick="showPassword()"></span>
			            <span class="label">Mostrar contraseña</span>
			        </div>
			        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
			    </form>
			    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">No recuerda su contraseña?</a>
			    <hr/>            	   
			</div> <!-- /.col-xs-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section>
<div class="RespuestaAjax"></div>
</form>

