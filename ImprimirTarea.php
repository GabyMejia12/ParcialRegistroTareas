<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<form method="POST" action="Impresion.php">


    
    <input type="submit" class="btn btn-primary btn-dark btn-lg" value="Imprimir" name="imprimir">
    
    
    
    <?php 
        if(isset($_POST['imprimir'])){
    ?>

                    <table id="example" class="display" style="width:100%">

                    <thead>
                        <tr>
                            <th>Nombre de la tarea</th>
                            <th>Descripción</th>
                            <th>Fecha</th> 
                            
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
                            

                            
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>


                    </table>
    <?php  } ?>
</form>