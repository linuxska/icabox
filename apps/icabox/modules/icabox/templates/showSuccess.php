<h1>Detalles de la Icabox</h1>
<table class="table table-striped table-hover">
  <tbody>
     <tr>
      <th>Nombre de la Icabox:</th>
      <td><?php echo sprintf("%s", $Icabox->getNumeroSerie() )?></td>
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
      <th>Dominio Cliente:</th>
      <td><?php echo $Icabox->getHostname() ?></td>
    </tr>
    <tr>
      <th>Fecha retiro:</th>
      <td><?php echo $Icabox->getFechaRetiro() ?></td>
    </tr>
  </tbody>
</table>
<hr />


<h2>Reparaciones de la Icabox: <?php  echo sprintf("%s", $Icabox->getNumeroSerie());?> </h2>

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
          <td><?php echo $icabox->getFechaSalida() ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
<?php else : ?>
    <h3 >
        <?php  echo sprintf("%s", $Icabox->getNumeroSerie());?>  no tiene reparaciones aun ! =)
    </h3>
<?php endif ?>
<hr />

<a class="btn btn-primary" href="<?php echo url_for('icabox/edit?id='.$Icabox->getId()) ?>">Editar la Icabox</a>
&nbsp;
<span class="btn btn-secundary">
</span>
<a class="btn btn-primary" href="<?php echo url_for('icabox/index') ?>">Listar las Icabox</a>
<hr />

