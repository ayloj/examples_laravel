<html>
    <body>
    <?php
   echo  Form::open(['route'=>'formexample', 'method'=>'STORE', 'files' => true, 'role' => 'form']);
    // Acá coloca los elementos del Formulario
    // 2 Cajas de Texto
    echo Form::label('nombre', 'Nombre:', array('class' => 'negrita'));
    echo Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Torta de Chocolate', 'required' => 'required']);

    echo Form::label('precio', 'Precio:', array('class' => 'subrayado'));
    echo Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'4.50', 'required' => 'required']);

    // 1 Selector de Archivo
    echo Form::label('path', 'Selecciona una imagen:', array('class' => 'negrita'));
    echo Form::file('imagen',null, array('required' => 'true'));

    // Cuadro de Texto
    echo Form::label('descripcion', 'Descripción:', array('class' => 'negrita'));
    echo Form::submit('Click Me!');
    echo Form::close();
    ?>
    </body>
</html>
