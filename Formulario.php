<!--Estudiante: Gabriela Lucia Delgado Mejia-->
<form action="GuardarTarea.php" method="post">
                            <div class="form-group">
                                <label>Tarea</label>
                                <input type="text" name="nombretarea" class="form-control" placeholder="Citas,clases,entregas..." require>
                                
                            </div>
                            <div class="form-group">
                                <label>Descripcion de tarea</label>
                                <textarea class="form-control" name="descripcion" rows="2" required  placeholder="¿Qué tarea es?"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Fecha para recordar</label>
                                <input type="date" name="fecha" class="form-control" required>
                            </div>
                        
                            </div>

    <input type="submit" class="btn btn-warning btn-block" value="Agregar y guardar" name="Registrar">
    

                        </form>