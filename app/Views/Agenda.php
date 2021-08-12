<body>
    <h1> Agenda del Colegio</h1>
    <div class='container'>
        <div class="row">
            <a href="<?php echo base_url();?>/Home/formulario" class="btn btn-info" role="button">Agende un curso Nuevo</a>
        </div>

        <div class="row">
            <table class="table">
                <tr>
                    <th scope="col">Id Salon</th>
                    <th scope="col">Id Curso</th>
                    <th scope="col">Id Profesor</th>
                    <th scope="col">Id Grupo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Acciones</th>

                </tr>
                <?php
                foreach($datos as $dato){
                    
                    echo "<tr scope='row'>";
                    echo "<td>".$dato['idSalon']."</td>";
                    echo "<td>".$dato['idCurso']."</td>";
                    echo "<td>".$dato['idProfesor']."</td>";
                    echo "<td>".$dato['idGrupo']."</td>";
                    echo "<td>".$dato['fecha']."</td>";
                    echo "<td>".$dato['hora']."</td>";
                    echo "<td>";
                
                ?>
            
                <a href="<?php echo base_url();?>/home/Eliminar?id=<?php echo $dato['id']?>" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Eliminar</a> </br>
                <?php
                    echo "</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>

    <a href="<?php echo base_url();?>/GrupoEstController" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Grupos y Estudiantes</a> 
    <a href="<?php echo base_url();?>/CursoController" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Cursos</a> 
    <a href="<?php echo base_url();?>/RegistrosController" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Registros</a>
    <a href="<?php echo base_url();?>/EstGrupoController" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Estudiantes por Grupo</a> 
</body>