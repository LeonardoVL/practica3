<div class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="row" id="header-row">
			<div class="col-lg-12">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a href="#" class="navbar-brand">EMPRESA</a>
				</div>

				<div class="navbar-collapse collapse" id="mobile_menu">
					<ul class="nav navbar-nav">
						<li class="{{ setActive('home') }}"><a href="/">Inicio</a></li>
						<li class="{{ setActive('people') }}"><a href="/people">Personas</a></li>
						<li class="{{ setActive('contact') }}"><a href="/contact">Contacto</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
						<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión </a>
							<ul class="dropdown-menu">
								<li><a href="#">Iniciar sesi├│n</a></li>
								<li><a href="#">Registrarse</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

