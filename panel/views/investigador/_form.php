<h1>Nuevo Investigador</h1>
<form method = "POST" enctype="multipart/form-data" action = "investigador.php?action=create">

  <div class="mb-3">
    <label for="Investigador" class="form-label">Fotografia</label>
    <input type="file" class="form-control" id="fotografia" name="fotografia" placeholder="foto.png" required = "required">
  </div>

  <div class="mb-3">
    <label for="Investigador" class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Escribe aqui el primer apellido" required = "required">
  </div>

  <div class="mb-3">
    <label for="Investigador" class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Escribe aqui el segundo apellido" required = "required">
  </div>

  <div class="mb-3">
    <label for="Investigador" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe aqui el nombre" required = "required">
  </div>

  <div class="mb-3">
    <label for="Investigador" class="form-label">Semblanza</label>
    <input type="text" class="form-control" id="semblanza" name="semblanza" placeholder="Escribe aqui la semblanza" required = "required">
  </div>

  <div class="mb-3">
    <label for="Investigador" class="form-label">Institucion</label>
    <select class = "form-select" id="id_institucion" name="id_institucion" required = "required">
      <?php foreach($instituciones as $institucion): ?>
      <option value = "<?php echo $institucion['id_institucion']; ?>"><?php echo $institucion['institucion'];?></option>
      <?php endforeach; ?>
    </select>
  </div>

    <div class="mb-3">
    <label for="Investigador" class="form-label">Tratamiento</label>
    <select class = "form-select" id="id_tratamiento" name="id_tratamiento" required = "required">
      <?php foreach($tratamientos as $tratamiento): ?>
      <option value = "<?php echo $tratamiento['id_tratamiento']; ?>"><?php echo $tratamiento['tratamiento'];?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="mb-3">
    <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
  </div>

</form>
