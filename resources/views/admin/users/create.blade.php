@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST' ]) !!}

					<div class="form-group">
						    {!! Form::label('email', 'E-Mail Address') !!}
						    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su e-mail'] ) !!}
						  </div>
						  <div class="form-group">
						    {!! Form::label('password', 'Contraseña') !!}
						    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su password'] ) !!}
						  </
						  </div>
						  <div class="form-group">
						    {!! Form::label('firs_name', 'nombre') !!}
						    {!! Form::text('firs_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su nombre'] ) !!}
						    
						  </div>
						  <div class="form-group">
						    {!! Form::label('last_name','Apellido') !!}
						    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su apellido'] ) !!}
						    
						  </div>
						  <div class="form-group">
						    {!! Form::label('type', 'tipo de usuario') !!}
						    {!! Form::select( 'type', ['' => 'seleccione tipo', 'user' => 'usuario', 'admin' => 'administrador'], null, ['class' => 'form-control'] ) !!}
						    
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
					

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection