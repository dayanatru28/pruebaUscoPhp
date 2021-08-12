<?php
       
       echo form_open('/GrupoEstController/insertar');
?>
</br></br>
<center> <h2> Complete el formulario para ingresar un estudiante a un grupo en especial </h2> </center>
</br> </br>

<div class="container">

    <form>
            <center>
                <div class="form-group">
                        <?php 
                        echo form_label('Grupo','idGrupo');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idGrupo" id="idGrupo">
                        <?php  foreach($GruposModel as $Grupos){
                                 for ($i=0; $i < count($Grupos) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Grupos[$i]["idGrupo"])?>"><?php echo($Grupos[$i]["idGrupo"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>
                
                <div class="form-group">
                        <?php 
                        echo form_label('Estudiante','idEstudiante');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idEstudiante" id="idEstudiante">
                        <?php  foreach($EstudiantesModel as $Estudiantes){
                            for ($i=0; $i < count($Estudiantes) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Estudiantes[$i]["idEstudiante"])?>"><?php echo($Estudiantes[$i]["nombreEstudiante"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>
         
                </br>
                <?php echo form_submit('insertar','Insertar','class="btn btn-danger"'); ?>
            <center>
            </br></br>
    </form>
</div>