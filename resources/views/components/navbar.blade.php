<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Dispensa</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="{{route("homepage")}}">Home</a>
							</li>
							@guest
								<li class="nav-item">
									<a class="nav-link" href="{{route("register")}}">Registrati</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route("login")}}">Login</a>
								</li>
							@else
								<li class="nav-item">
									<p class="nav-link">Benvenuto {{Auth::user()->name}}</p>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route("logout")}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
								</li>
								<form id="logout-form" action="{{route("logout")}}" method="POST">
									@csrf
								</form>
							@endguest
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>