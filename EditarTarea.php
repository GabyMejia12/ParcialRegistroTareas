<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<?php include("DB.php"); 


if  (isset($_GET['idtareas'])) {
    $idtareas = $_GET['idtareas'];
    $query = "SELECT * FROM tareas ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['titulo'];
      $descripcion = $row['descripcion'];
      $fecha = $row['fecha_registro'];
      
      
    }
  }

  if(isset($_POST['actualizar'])){
    $idtareas = $_GET['idtareas'];
    $nombre = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha_registro'];
    


$query = "UPDATE titulo set nombre = '$titulo', descripcion = '$descripcion', fecha = '$fecha_registro', WHERE tareas = $tareas";
mysqli_query($conn,$query);
    $_SESSION['mensaje'] = "Datos Actualizados Correctamente";
   $_SESSION['mensaje_tipo'] = "warning";
   header("Location: Index.php");
  }

?>

<?php include("includes/header.php"); ?>


<div class="container">

<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">
                <!--FORMULARIO DE ACTUALIZAR DATOS-->


                <form action="EditarTarea.php?tareas=<?php echo $_GET['idtareas']; ?>" method="post">
                            <div class="form-group">
                                <label>Nombre de Tarea</label>
                                <input type="text" name="nombre" class="form-control" placeholder=" " required value="<?php echo ""; ?>">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="2" required >
                                <?php echo ""; ?>   
                                </textarea>
                                </div>
                            <div class="form-group">
                                <label>Fecha de realizacion</label>
                                <input type="date" name="fecha" class="form-control" required value="<?php echo $fecha; ?>">
                            </div>

    <input type="submit" class="btn btn-success btn-block" value="Actualizar tareas realizadas" name="actualizar">

                        </form>

            </div>
        </div>
</div>
</div>

<?php include("includes/footer.php"); ?>