<div class="container-fluid">
    <div class="page-header">
<h1>Lista de Icabox</h1>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Nombre icabox</th>
      <th>Fecha armado</th>
      <th>Procesador</th>
      <th>Tarjeta madre</th>
      <th>Memoria RAM</th>
      <th>Disco Duro</th>
      <th>Lugar de destino</th>
      <th>Fecha retiro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Icaboxs as $Icabox): ?>
    <tr>
      <td><a href="<?php echo url_for('icabox/show?id='.$Icabox->getId()) ?>"><?php echo $Icabox->getNombreIcabox() ?></td>
      <td><?php echo $Icabox->getFechaArmado() ?></td>
      <td><?php echo $Icabox->getProcesador() ?></td>
      <td><?php echo $Icabox->getTarjetaMadre() ?></td>
      <td><?php echo $Icabox->getMemoriaRam() ?></td>
      <td><?php echo $Icabox->getDiscoDuro() ?></td>
      <td><?php echo $Icabox->getLugarDestino() ?></td>
      <td><?php echo $Icabox->getFechaRetiro() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

  <a href="<?php echo url_for('icabox/new') ?>"  class="btn btn-primary">Nueva Icabox</a>
