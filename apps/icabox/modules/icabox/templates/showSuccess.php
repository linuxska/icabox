<h1>Detalles de la Icabox</h1>
<table class="table table-striped table-hover">
  <tbody>
     <tr>
      <th>Nombre de la Icabox:</th>
      <td><?php echo sprintf("%s", $Icabox->getNombreIcabox() )?></td>
    </tr>
    <tr>
      <th>Fecha armado:</th>
      <td><?php echo $Icabox->getFechaArmado() ?></td>
    </tr>
    <tr>
      <th>Procesador:</th>
      <td><?php echo $Icabox->getProcesador() ?></td>
    </tr>
    <tr>
      <th>Tarjeta Madre:</th>
      <td><?php echo $Icabox->getTarjetaMadre() ?></td>
    </tr>
    <tr>
      <th>Memoria RAM:</th>
      <td><?php echo $Icabox->getMemoriaRam() ?></td>
    </tr>
    <tr>
      <th>Disco duro:</th>
      <td><?php echo $Icabox->getDiscoDuro() ?></td>
    </tr>
    <tr>
      <th>Lugar de destino:</th>
      <td><?php echo $Icabox->getLugarDestino() ?></td>
    </tr>
    <tr>
      <th>Fecha retiro:</th>
      <td><?php echo $Icabox->getFechaRetiro() ?></td>
    </tr>
  </tbody>
</table>
<hr />


<h2>Reparaciones de la Icabox: <?php  echo sprintf("%s", $Icabox->getNombreIcabox());?> </h2>

<?php if($Icabox->getReparacionIcaboxs()->count() > 0 ) : ?>
    <table  class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Fecha fallo</th>
          <th>Motivo fallo</th>
          <th>Solucion</th>
          <th>Fecha produccion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Icabox->getReparacionIcaboxs() as $icabox): ?>
        <tr>
          <td><?php echo $icabox->getFechaFallo() ?></td>
          <td><?php echo $icabox->getMotivoFallo() ?></td>
          <td><?php echo $icabox->getSolucion() ?></td>
          <td><?php echo $icabox->getFechaProduccion() ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
<?php else : ?>
    <h3 >
        <?php  echo sprintf("%s", $Icabox->getNombreIcabox());?>  no tiene reparaciones aun ! =)
    </h3>
<?php endif ?>


<hr />

<a class="btn btn-primary" href="<?php echo url_for('icabox/edit?id='.$Icabox->getId()) ?>">Editar la Icabox</a>
&nbsp;
<a class="btn btn-primary" href="<?php echo url_for('icabox/index') ?>">Listar las Icabox</a>
<hr />

<?php /*
<?php $Icabox = IcaboxPeer::retrieveByPk($Icabox->getId());?>
<table class="table table-striped table-hover">
  <tbody>
    <tr>
      <th>Icabox:</th>
      <td><?php echo sprintf("%s", $Icabox->getNombreIcabox() )?></td>
    </tr>
    <tr>
      <th>Fecha armado:</th>
      <td><?php echo $Icabox->getFechaArmado() ?></td>
    </tr>
    <tr>
      <th>Procesador:</th>
      <td><?php echo $Icabox->getProcesador() ?></td>
    </tr>
    <tr>
      <th>Tarjeta Madre:</th>
      <td><?php echo $Icabox->getTarjetaMadre() ?></td>
    </tr>
    <tr>
      <th>Memoria Ram:</th>
      <td><?php echo $Icabox->getMemoriaRam() ?></td>
    </tr>
    <tr>
      <th>Disco duro:</th>
      <td><?php echo $Icabox->getDiscoDuro() ?></td>
    </tr>
    <tr>
      <th>Lugar de destino:</th>
      <td><?php echo $Icabox->getLugarDestino() ?></td>
    </tr>
    <tr>
      <th>Fecha retiro:</th>
      <td><?php echo $Icabox->getFechaRetiro() ?></td>
    </tr>
  </tbody>
</table>

<?php $Icabox = IcaboxPeer::retrieveByPk($Icabox->getId());?>
<hr />

<a class="btn btn-primary" href="<?php echo url_for('icabox/edit?id='.$Car->getId()) ?>">Editar</a>
&nbsp;
<a class="btn btn-primary" href="<?php echo url_for('icabox/index') ?>">Listar</a>
*/?>
