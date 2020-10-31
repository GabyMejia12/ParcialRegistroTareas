<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<?php
    include ("DB.php");

    if(isset($_GET['idtareas'])){
        $idtareas = $_GET['idtareas'];
        $query = "DELETE FROM tareas WHERE idtareas =  $idtareas";
        $resultado = mysqli_query($conn,$query);
        if(!$resultado){
            die("Error al eliminar este registro de la BD");
        }else{
            $_SESSION['mensaje'] = "Tarea borrada de la Base de Datos";
             $_SESSION['mensaje_tipo'] = "danger";
            header("Location: Index.php");
        }

    }
?>