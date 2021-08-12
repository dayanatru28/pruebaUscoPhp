<body>
    <h1> Registro</h1>
    <div class='container'>
        <div class="row">
            <table class="table">
                <tr>
                    <th scope="col">Id Salon</th>
                    <th scope="col">Id Curso</th>
                    <th scope="col">Id Profesor</th>
                    <th scope="col">Id Grupo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>


                </tr>
                <?php
                foreach($datos as $dato){
                    $fec=$dato['fecha'];
                    $fecha=explode("-",$fec);

                    $date= date('Y-m-d');
                    $fech2=explode("-",$date);
                    
                    if($fecha[0]==$fech2[0] and $fecha[1]==$fech2[1] and $fecha[2]==$fech2[2]){
                    
                    echo "<tr scope='row'>";
                    echo "<td>".$dato['idSalon']."</td>";
                    echo "<td>".$dato['idCurso']."</td>";
                    echo "<td>".$dato['idProfesor']."</td>";
                    echo "<td>".$dato['idGrupo']."</td>";
                    echo "<td>".$dato['fecha']."</td>";
                    echo "<td>".$dato['hora']."</td>";
                    echo "<td>";

                }else {
                    if($fecha[0]<$fech2[0] or $fecha[1]<$fech2[1] or $fecha[2]<$fech2[2]){
                    
                    echo "<tr scope='row' class='table-success'>";
                    echo "<td>".$dato['idSalon']."</td>";
                    echo "<td>".$dato['idCurso']."</td>";
                    echo "<td>".$dato['idProfesor']."</td>";
                    echo "<td>".$dato['idGrupo']."</td>";
                    echo "<td>".$dato['fecha']."</td>";
                    echo "<td>".$dato['hora']."</td>";
                    echo "<td>";

                }
                 else{
                    echo "<tr scope='row' class='table-warning' >";
                    echo "<td>".$dato['idSalon']."</td>";
                    echo "<td>".$dato['idCurso']."</td>";
                    echo "<td>".$dato['idProfesor']."</td>";
                    echo "<td>".$dato['idGrupo']."</td>";
                    echo "<td>".$dato['fecha']."</td>";
                    echo "<td>".$dato['hora']."</td>";
                    echo "<td>";

                }
            }
            }
                ?>

            </table>
        </div>
    </div>
    <a href="<?php echo base_url();?>/Home" class="btn btn-success" role="button"> <i class="fa fa-pencil-square-o"></i>Inicio</a> </br>
</body>