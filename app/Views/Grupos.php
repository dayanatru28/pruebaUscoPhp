<body>
    <h1> Tabla de Estudiantes por Grupos</h1>
    <div class='container'>
        <div class="row">
            <a href="<?php echo base_url();?>/GrupoEstController/formulario" class="btn btn-info" role="button">Nuevo integrante de un curso</a>
        </div>

        <div class="row">
            <table class="table">
                <tr>
                    <th scope="col">Id del Grupo</th>
                    <th scope="col">Id del Estudiante</th>
                    <th scope="col">Acciones</th>

                </tr>
                <?php
                foreach($grupos as $grupo){
                    echo "<tr scope='row'>";
                    echo "<td>".$grupo['idGrupo']."</td>";
                    echo "<td>".$grupo['idEstudiante']."</td>";
                    echo "<td>";
                
                ?>
                <a href="<?php echo base_url();?>/GrupoEstController/eliminar?idRelacion=<?php echo $grupo['idRelacion']?>" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Eliminar</a> </br>
                <?php
                    echo "</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>

    <a href="<?php echo base_url();?>/Home" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Inicio</a> </br>

</body>