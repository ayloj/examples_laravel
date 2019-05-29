<html>
<body>
{{ Form::open(['route'=>'formexample', 'method'=>'STORE', 'files' => true, 'role' => 'form']) }}

{{ Form::label('nombre', 'Nombre:', array('class' => 'negrita')) }}
{{ Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Torta de Chocolate', 'required' => 'required']) }}

{{ Form::label('precio', 'Precio:', array('class' => 'subrayado')) }}
{{ Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'4.50', 'required' => 'required']) }}

<!--// 1 Selector de Archivo-->
{{ Form::label('path', 'Selecciona una imagen:', array('class' => 'negrita')) }}
{{ Form::file('imagen',null, array('required' => 'true')) }}

<!--// Cuadro de Texto-->
{{ Form::label('descripcion', 'Descripción:', array('class' => 'negrita')) }}
{{ Form::textarea('descripcion', null, ['placeholder'=>'Ingresa una descripción acá...', 'required' => 'required']) }}
{{ Form::submit('Procesar') }}
{{ Form::close() }}
</body>
</html>
