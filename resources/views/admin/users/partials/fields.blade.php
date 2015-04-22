
		<div class="form-group">

	
		    {!! Form::label('email', 'E-Mail Address') !!}
		    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su e-mail'] ) !!}
		</div>
	  <div class="form-group">
	  
	    {!! Form::label('password', 'Contraseña') !!}
	    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su password'] ) !!}
	  
	  </div>
	  <div class="form-group">
	    {!! Form::label('firs_name', 'nombre') !!}
	    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su nombre'] ) !!}
	    
	  </div>
	  <div class="form-group">
	    {!! Form::label('last_name','Apellido') !!}
	    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su apellido'] ) !!}
	    
	  </div>
	  <div class="form-group">
	    {!! Form::label('type', 'tipo de usuario') !!}
	    {!! Form::select( 'type', config('options.types'), null, ['class' => 'form-control'] ) !!}
	    
	  </div>
	  