<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<?php 
include("DB.php");

if(isset($_POST['Registrar'])){
    $nombre = $_POST['nombretarea'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    

$query = "INSERT INTO tareas(titulo,descripcion,fecha_registro)
VALUES('$nombre','$descripcion','$fecha')";
$resultado = mysqli_query($conn,$query);

if(!$resultado){
    die("Error");
}else{
   $_SESSION['mensaje'] = "Tarea registrada exitosamente";
   $_SESSION['mensaje_tipo'] = "success";
   header("Location: Index.php");
}
}
?>