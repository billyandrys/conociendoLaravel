
	@if ($errors->any())
		<div class="alert alert-danger" role="alert">
		<p>Por favor corrige los errores</p>

			<ul>

				@foreach($errors->all() as $error)
					<il>{{ $error }}</il>
				@endforeach
			</ul>
		</div>
	@endif
						