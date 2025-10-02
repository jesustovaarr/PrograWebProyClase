<h1>Investigadores</h1>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <a href="investigador.php?action=create" class="btn btn-success">Nuevo</a>
    <a class="btn btn-primary">Imprimir</a>
</div>   
<table class="table">
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
        <td><img src="../images/investigadores/<?php echo $investigador['fotografia']; ?>" width="75" height="75" class="rounded-circle" alt="investigador"></td>
        <td><?php echo $investigador['primer_apellido']; ?></td>
        <td><?php echo $investigador['segundo_apellido']; ?></td>
        <td><?php echo $investigador['nombre']; ?></td>
        <td><?php echo substr($investigador['semblanza'],0,70).'...'; ?></td>
        <td><?php echo $investigador['institucion']; ?></td>
        <td><?php echo $investigador['tratamiento']; ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href ="investigador.php?action=update&id=<?php echo $investigador['id_investigador']; ?>" class="btn btn-warning">Editar</a>
                <a href ="investigador.php?action=delete&id=<?php echo $investigador['id_investigador']; ?>" class="btn btn-danger">Eliminar</a>
            </div>   
        </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>