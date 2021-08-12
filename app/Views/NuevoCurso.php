<body>
<div class='container'>
     
    <?php
    echo form_open('/CursoController/insertar');
    ?>
    <div class="form-group">
    <?php
    echo form_label('Nombre');
    echo '</br>';
    echo form_input(array('name'=>'nombreCurso','placeholder'=>'Progrmacion','class'=>'form-control'));
    echo '</br>';
    echo form_submit('insertar', 'Insertar','class="btn btn-primary"');
    ?>
    </div>
    <php
    echo form_close();
    ?>
</div>
</body>