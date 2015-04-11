@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<div class="panel-body">

				<a class="btn btn-info" href="{{ route('admin.users.create') }}" role="button">Crear usuario</a>

					<table class="table">
  				<tr>
  						<th>#</th>
  						<th>Nombre</th>
  						<th>Email</th>
  						<th>Acciones</th>

  					</tr>
  					
  					@foreach($users as $user)
  					<tr>
  						<th>{{ $user->id }}</th>
  						<th>{{ $user->full_name }}</th>
  						<th>{{ $user->email }}</th>
  						<th>
  							<a href="">Editar</a>
  							<a href="">Eliminar</a>
  						</th>
  	
  					</tr>
  					@endforeach
					  					
					</table>
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection	