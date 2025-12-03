<h1>Tratamientos</h1>
<div class="crud-header-buttons mb-3">
    <a href="tratamiento.php?action=create" class="btn btn-primary">Nuevo Tratamiento</a>
</div>   
<table class="table panel-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tratamiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $tratamiento): ?>
        <tr>
        <th scope="row"><?php echo $tratamiento['id_tratamiento']; ?></th>
        <td><?php echo $tratamiento['tratamiento']; ?></td>
        <td>
            <div class="btn-group" role="group">
                <a href="tratamiento.php?action=update&id=<?php echo $tratamiento['id_tratamiento']; ?>" class="btn-action btn-edit" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                <a href="tratamiento.php?action=delete&id=<?php echo $tratamiento['id_tratamiento']; ?>" class="btn-action btn-delete" title="Eliminar"><i class="fas fa-trash"></i></a>
            </div>   
        </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>