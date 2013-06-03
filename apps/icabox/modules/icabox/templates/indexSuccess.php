<div class="container-fluid">
    <div class="page-header">
<h1>Lista de Icabox</h1>
</div>
 <div id="sf_admin_bar">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Numero de serie</th>
      <th>Dominio cliente</th>
      <th>Procesador</th>
      <th>Tarjeta madre</th>
      <th>Memoria RAM</th>
      <th>Fecha armado</th>
      <th>Fecha retiro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Icaboxs as $Icabox): ?>
    <tr>
      <td><a href="<?php echo url_for('icabox/show?id='.$Icabox->getId()) ?>"><?php echo $Icabox->getNumeroSerie() ?></td>
      <td><?php echo $Icabox->getHostname() ?></td>
      <td><?php echo $Icabox->getProcesador() ?></td>
      <td><?php echo $Icabox->getTarjetaMadre() ?></td>
      <td><?php echo $Icabox->getMemoriaRam() ?></td>
      <td><?php echo $Icabox->getFechaArmado() ?></td>
      <td><?php echo $Icabox->getFechaRetiro() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

  <a href="<?php echo url_for('icabox/new') ?>"  class="btn btn-primary">Nueva Icabox</a>
