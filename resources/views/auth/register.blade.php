<x-layout>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mt-3">
				<h1>Registrati</h1>
			</div>
			<div class="col-12">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form method="POST" action="{{route("register")}}">
					@csrf
					<div class="mb-3">
						<label for="name" class="form-label">Username</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">E-Mail</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Conferma Password</label>
						<input type="password" name="password_confirmation" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</x-layout>