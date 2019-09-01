<div class="form-group">
	{{ Form::label('name', 'Nombre de usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control ']) }}
</div>
<h3>Lista de roles</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
		<li>
			<label>
				{{ Form::checkbox('roles[]', $role->id, null) }}
				{{ $role->name }}
				<em> ({{ $role->description ?: 'Sin descripción' }}) </em>
			</label>
			
		</li>
		@endforeach 
	</ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>