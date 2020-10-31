<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<?php include("DB.php"); ?>


<BODY onLoad="window.print()"> 
<?php 
        if(isset($_POST['imprimir'])){
    ?>

                    <table id="example" class="table table-striped table-bordered" style="width:50%">

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
</body>
</html>



</form>
    
    

    