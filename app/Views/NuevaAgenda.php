<?php
       
       echo form_open('/Home/insertar');
?>
</br></br>
<center> <h2> Complete el formulario para ingresar un nuevo registro </h2> </center>
</br> </br>

<div class="container">

    <form>
            <center>
                <div class="form-group">
                        <?php 
                        echo form_label('Salon','idSalon');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idSalon" id="idSalon">
                        <?php  foreach($Salones as $Salon){
                                 for ($i=0; $i < count($Salon) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Salon[$i]["idSalon"])?>"><?php echo($Salon[$i]["idSalon"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>
                
                <div class="form-group">
                        <?php 
                        echo form_label('Curso','idCurso');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idCurso" id="idCurso">
                        <?php  foreach($Cursos as $Curso){
                            for ($i=0; $i < count($Curso) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Curso[$i]["idCurso"])?>"><?php echo($Curso[$i]["nombreCurso"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>

                <div class="form-group">
                        <?php 
                        echo form_label('Profesor','idProfesor');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idProfesor" id="idProfesor">
                        <?php  foreach($Profesores as $Profesor){
                            for ($i=0; $i < count($Profesor) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Profesor[$i]["idProfesor"])?>"><?php echo($Profesor[$i]["nombreProfesor"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>

                <div class="form-group">
                        <?php 
                        echo form_label('Grupo','idGrupo');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idGrupo" id="idGrupo">
                        <?php  foreach($Grupos as $Grupo){
                            for ($i=0; $i < count($Grupo) ; $i++) {                           
                        ?>
                            <option value="<?php echo($Grupo[$i]["idGrupo"])?>"><?php echo($Grupo[$i]["idGrupo"])?></option>
                        <?php
                        }
                    }
                        ?>
                        </select>
                </div>

                <div class="form-group">
                        <?php 
                        echo form_label('Fecha');
                        ?></br>
                        <input type="date" name="trip-start1" id="start1" value="<?php echo set_value('trip-start1'); ?> " min="<?php echo date("Y-m-d"); ?>" max="2030-12-31" required="" />
                </div>

                <div class="form-group">
                        <?php 
                        echo form_label('Hora');
                        ?></br>
                        <input type="time" name="limitetiempo" list="listalimitestiempo" step="0.001">
                </div>
         
                </br>
                <?php echo form_submit('insertar','Insertar','class="btn btn-danger"'); ?>
            <center>
            </br></br>
    </form>
</div>