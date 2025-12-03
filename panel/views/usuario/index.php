<h1>Usuarios</h1>
<div class="crud-header-buttons mb-3">
    <a href="usuario.php?action=create" class="btn btn-primary">Nuevo Usuario</a>
</div>   
<table class="table panel-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $usuario): ?>
        <tr>
        <th scope="row"><?php echo $usuario['id_usuario']; ?></th>
        <td><?php echo $usuario['correo']; ?></td>
        <td>
            <div class="btn-group" role="group">

                <a href ="usuario.php?action=update&id=<?php echo $usuario['id_usuario']; ?>" class="btn-action btn-edit" title="Editar"><i class="fas fa-pencil-alt"></i></a>

                <div class="btn-group dropup" role="group">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-roles-dropdown" data-bs-toggle="dropdown" data-bs-container="body" aria-expanded="false" data-bs-offset="0,10">
                        Roles
                    </button>
                    <ul class="dropdown-menu p-2">
                        <li><h6 class="dropdown-header">Roles</h6></li>
                        <?php if (!empty($usuario['roles']) && is_array($usuario['roles'])): ?>
                        <?php foreach ($usuario['roles'] as $rol): ?>
                            <li><span class="dropdown-item-text"><?php echo $rol; ?></span></li>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <li><span class="dropdown-item-text text-muted small">No tiene roles</span></li>
                        <?php endif; ?>
                        
                        <li><hr class="dropdown-divider"></li>
                        
                        <li><h6 class="dropdown-header">Privilegios</h6></li>
                        <?php if (!empty($usuario['permisos']) && is_array($usuario['permisos'])): ?>
                        <?php foreach ($usuario['permisos'] as $permiso): ?>
                            <li><span class="dropdown-item-text"><?php echo $permiso; ?></span></li>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <li><span class="dropdown-item-text text-muted small">No tiene privilegios</span></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <a href ="usuario.php?action=delete&id=<?php echo $usuario['id_usuario']; ?>" class="btn-action btn-delete" title="Eliminar"><i class="fas fa-trash"></i></a>
                
            </div>   
        </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>