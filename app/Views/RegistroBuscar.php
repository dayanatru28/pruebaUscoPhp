<body>
<div class='container'>
     
    <?php
    echo form_open('/RegistrosController/buscar');
    ?>
    <div class="form-group">
    <h3> Ingrese el numero del salon que desea buscar </h3>
    <div class="form-group">
                        <?php 
                        echo form_label('Salones','Salones');
                        ?></br>
                        <!-- De la consulta realizada selecciono los nombres de los lugares disponibles por un ciclo -->
                        <select class="form-control" name="idSalon" id="idSalon">
                        <?php  
                                 for ($i=0; $i < count($salones) ; $i++) {                           
                        ?>
                            <option value="<?php echo($salones[$i]["idSalon"])?>"><?php echo($salones[$i]["idSalon"])?></option>
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