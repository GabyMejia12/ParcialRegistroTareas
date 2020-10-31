<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<?php include("DB.php"); ?>

<?php include("includes/header.php"); ?>
<p><h2><strong>Aqui puedes registrar todas aquellas actividades que realices.</strong></h2></p>   
<div class="container  p-4">
        <div class="row">
            <div class="col-md-4">


            <!--MENSAJE DE ALERTA-->
            <?php  if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-<?=$_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
  <strong>
      <?=$_SESSION['mensaje']; ?>
  </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

            <?php session_unset(); } ?>

                <div class="card card-body">
                       <?php include("Formulario.php"); ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    <?php include("MostrarTarea.php");?>
                </div>
            </div>

            <div class="col-md-8">
                    <div class="card card-body">
                        <?php include("ImprimirTarea.php");?>
                    </div>
            </div>
        </div>
</div>

<?php include("includes/footer.php"); ?>