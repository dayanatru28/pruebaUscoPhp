<h1> Estudiantes por Grupo</h1>
    <div class='container'>
        
        <div class="row">
            <table class="table">
                <tr>
                    <th scope="col">Id Grupo</th>
                    <th scope="col">Id Estudiantes</th>

                </tr>
                <?php
                foreach($datos as $dato){
                    
                    echo "<tr scope='row'>";
                    echo "<td>".$dato['idGrupo']."</td>";
                    echo "<td>".$dato['idEstudiante']."</td>";
                    echo "<td>";
                }
                
                ?>

            </table>

            <a href="<?php echo base_url();?>/Home" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Inicio</a> </br>
        </div>
    </div>