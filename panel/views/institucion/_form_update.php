<h1>Editar Institución</h1>
<form method = "POST" enctype="multipart/form-data" action = "institucion.php?action=update&id=<?php echo $id; ?>">

  <div class="text-center">
    <img src="../images/institucion/<?php echo $data['logotipo']; ?>" width="200" height="200" class="rounded-circle" alt="institucion">
  </div>

    <div class="mb-3">
    <label for="Institucion" class="form-label"></label>
    <input type="file" class="form-control" id="logotipo" name="logotipo">
  </div>

  <div class="mb-3">
    <label for="Institucion" class="form-label">Nombre de la Institución</label>
    <input type="text" class="form-control" id="institucion" name="institucion" value = "<?php echo $data['institucion']; ?>" placeholder="Escribe aqui el nombre" required = "required">
  </div>

  <div class="mb-3">
    <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
  </div>

</form>