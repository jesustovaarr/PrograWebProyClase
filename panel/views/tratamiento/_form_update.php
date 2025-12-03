<h1>Modificar Tratamiento</h1>
<form method = "POST" action = "tratamiento.php?action=update&id=<?php echo $id; ?>">
  <div class="mb-3">
    <label for="tratamiento" class="form-label">Tratamiento</label>
    <input type="text" class="form-control" id="tratamiento" name="tratamiento" value = "<?php echo $data['tratamiento']; ?>" placeholder="Escribe aqui el tratamiento" required = "required">
  </div>

  <div class="mb-3">
    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Guardar">
  </div>

</form>
