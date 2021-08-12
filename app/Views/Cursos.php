<body>
    <h1> Tabla de Cursos</h1>
    <div class='container'>
        <div class="row">
            <a href="<?php echo base_url();?>/CursoController/formulario" class="btn btn-info" role="button">Nuevo Curso</a>
        </div>

        <div class="row">
            <table class="table">
                <tr>
                    <th scope="col">Id Curso</th>
                    <th scope="col">Nombre del Curso </th>
                    <th scope="col">Acciones</th>

                </tr>
                <?php
                foreach($cursos as $curso){
                    echo "<tr scope='row'>";
                    echo "<td>".$curso['idCurso']."</td>";
                    echo "<td>".$curso['nombreCurso']."</td>";
                    echo "<td>";
                
                ?>
                <a href="<?php echo base_url();?>/CursoController/formEditar?idCurso=<?php echo $curso['idCurso']?>" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Editar</a> </br>
                <?php
                    echo "</td>";
                    echo "<td>";
                ?>
                <a href="<?php echo base_url();?>/CursoController/eliminar?idCurso=<?php echo $curso['idCurso']?>" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Eliminar</a> </br>
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