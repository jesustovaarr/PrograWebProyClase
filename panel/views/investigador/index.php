<h1>Investigadores</h1>
<div class="crud-header-buttons mb-3">
    <a href="investigador.php?action=create" class="btn btn-primary">Nuevo Investigador</a>
</div>   
<table class="table panel-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fotografia</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Semblanza</th>
      <th scope="col">Institución</th>
      <th scope="col">Tratamiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $investigador): ?>
        <tr>
        <th scope="row"><?php echo $investigador['id_investigador']; ?></th>
        <td><img src="../images/investigador/<?php echo $investigador['fotografia']; ?>" width="60" height="60" class="rounded-circle" alt="investigador"></td>
        <td><?php echo $investigador['primer_apellido']; ?></td>
        <td><?php echo $investigador['segundo_apellido']; ?></td>
        <td><?php echo $investigador['nombre']; ?></td>
        <td><?php echo substr($investigador['semblanza'],0,70).'...'; ?></td>
        <td><?php echo $investigador['institucion']; ?></td>
        <td><?php echo $investigador['tratamiento']; ?></td>
        <td>
            <div class="btn-group" role="group">
                <a href="investigador.php?action=update&id=<?php echo $investigador['id_investigador']; ?>" class="btn-action btn-edit" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                <a href="investigador.php?action=delete&id=<?php echo $investigador['id_investigador']; ?>" class="btn-action btn-delete" title="Eliminar"><i class="fas fa-trash"></i></a>
            </div>   
        </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>