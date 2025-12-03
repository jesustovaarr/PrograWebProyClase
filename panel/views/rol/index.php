<h1>Roles</h1>
<div class="crud-header-buttons mb-3">
    <a href="rol.php?action=create" class="btn btn-primary">Nuevo Rol</a>
</div>   
<table class="table panel-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rol</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $rol): ?>
        <tr>
        <th scope="row"><?php echo $rol['id_rol']; ?></th>
        <td><?php echo $rol['rol']; ?></td>
        <td>
            <div class="btn-group" role="group">
                <a href="rol.php?action=update&id=<?php echo $rol['id_rol']; ?>" class="btn-action btn-edit" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                <a href="rol.php?action=delete&id=<?php echo $rol['id_rol']; ?>" class="btn-action btn-delete" title="Eliminar"><i class="fas fa-trash"></i></a>
            </div>   
        </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>