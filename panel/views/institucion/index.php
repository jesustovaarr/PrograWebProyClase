<h1>Instituciones</h1>
<div class="crud-header-buttons mb-3">
    <a href="institucion.php?action=create" class="btn btn-primary">Nueva Institución</a>
    <a href="reportes.php?action=InstitucionesInvestigadores" target="_blank" class="btn btn-print">Imprimir PDF</a>
    <a href="reportes.php?action=InstitucionesExcel" class="btn btn-excel">Exportar a Excel</a>
</div>
<table class="table panel-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Logotipo</th>
      <th scope="col">Institucion</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $institucion): ?>
        <tr>
            <th scope="row"><?php echo $institucion['id_institucion']; ?></th>
            <td><img src="../images/institucion/<?php echo $institucion['logotipo']; ?>" width="60" height="60" class="rounded-circle" alt="institucion"></td>
            <td><?php echo $institucion['institucion']; ?></td>
            <td>
                <div class="btn-group" role="group">
                    <a href="institucion.php?action=update&id=<?php echo $institucion['id_institucion']; ?>" class="btn-action btn-edit" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                    <a href="institucion.php?action=delete&id=<?php echo $institucion['id_institucion']; ?>" class="btn-action btn-delete" title="Eliminar"><i class="fas fa-trash"></i></a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>