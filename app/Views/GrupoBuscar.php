<body>
<div class='container'>
     
    <?php
    echo form_open('/EstGrupoController/buscar');
    ?>
    <div class="form-group">
    <h3> Ingrese el numero del salon que desea buscar </h3>
    <div class="form-group">
                        <?php 
                        echo form_label('Grupos','idGrupo');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idGrupo" id="idGrupo">
                        <?php  
                                 for ($i=0; $i < count($grupos) ; $i++) {                           
                        ?>
                            <option value="<?php echo($grupos[$i]["idGrupo"])?>"><?php echo($grupos[$i]["idGrupo"])?></option>
                        <?php
                        }
                    
                        ?>
                        </select>
                </div>
            </br>
        <?php echo form_submit('buscar','Buscar','class="btn btn-danger"'); ?>
    </div>
    <php
    echo form_close();
    ?>
</div>
</body>