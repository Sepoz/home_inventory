<x-layout>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mt-3">
				<h1>Gestione Spesa</h1>
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
				<form method="POST" action="{{route("homepage.form")}}">
					@csrf
					<div class="mb-3">
						<label for="productName" class="form-label">Nome Prodotto</label>
						<input type="text" name="productName" class="form-control">
					</div>
					<div class="mb-3">
						<label for="productQuantity" class="form-label">Quantità Prodotto</label>
						<input type="text" name="productQuantity" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			@foreach ($elements as $element)
				<div class="col-6 col-md-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<h5 class="card-title">{{$element->productName}}</h5>
							<p class="card-text">{{$element->productQuantity}}</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</x-layout>
