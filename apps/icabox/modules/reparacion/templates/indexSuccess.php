<div class="container-fluid">
    <div class="page-header">
<h1>Lista de reparacion de las Icaboxs</h1>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Nombre de la icabox</th>
      <th>Fecha fallo</th>
      <th>Motivo fallo</th>
      <th>Solucion</th>
      <th>Fecha produccion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ReparacionIcaboxs as $ReparacionIcabox): ?>
    <tr>
      <td><a href="<?php echo url_for('reparacion/edit?id='.$ReparacionIcabox->getId()) ?>"><?php echo $ReparacionIcabox->getIdIcabox() ?></td>
      <td><?php echo $ReparacionIcabox->getFechaFallo() ?></td>
      <td><?php echo $ReparacionIcabox->getMotivoFallo() ?></td>
      <td><?php echo $ReparacionIcabox->getSolucion() ?></td>
      <td><?php echo $ReparacionIcabox->getFechaProduccion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  <a href="<?php echo url_for('reparacion/new') ?>" class="btn btn-primary">Nueva reparacion</a>
