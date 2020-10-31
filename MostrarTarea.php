<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<form method="POST" action="Index.php">

    <input type="submit" class="btn btn-info btn-block" value="Registro de Tareas" name="mostrar"><br>
    


    <?php 
        if(isset($_POST['mostrar'])){
    ?>

                    <table id="example" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th>Nombre de la tarea</th>
                            <th>Descripción</th>
                            <th>Fecha</th> 
                            <th>Ajustes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM tareas ";
                            $resultado_tabla = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($resultado_tabla)){
                        ?>
                        <tr>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['fecha_registro']; ?></td>
                            

                            <td>

                            <a href="EditarTarea.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-success">
                                Cambiar
                                </a>
                              <a href="EliminarTarea.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-danger">
                                Borrar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre de la tarea</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Ajustes</th>
                        </tr>
                    </tfoot>


                    </table>
    <?php  } ?>
</form>