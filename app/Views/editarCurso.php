<body>
<div class='container'>
     
    <?php
    echo form_open('/CursoController/editar');
    if(isset($cursos)){
        $nombre=$cursos[0]['nombreCurso'];
    }
    else{
        $nombre="";
    }

    ?>
    <div class="form-group">
    <?php
    echo '</br>';
    echo form_label('Nombre');
    echo '</br>';
    echo form_input(array('name'=>'nombreCurso','placeholder'=>'Progrmacion','class'=>'form-control','value'=>$nombre));
    echo '</br>';
    echo form_submit('editar', 'Editar','class="btn btn-primary"');
    if(isset($cursos)){
        echo form_hidden('idCurso',$cursos[0]['idCurso']);
    }
    ?>
    </div>
    <php
    echo form_close();
    ?>
</div>
</body>