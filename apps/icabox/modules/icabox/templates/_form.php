<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('icabox/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a class="btn btn-secundary" href="<?php echo url_for('icabox/index') ?>">Regresar a la lista</a>
          <!--
            Accion de eliminar
          <span class="btn btn-secundary"><?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php  echo link_to('Borrar', 'icabox/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Seguro que deseas borrar la icabox?')) ?>
          <?php endif; ?>
          -->
          </span>
          <input class="btn btn-primary" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['procesador']->renderLabel() ?></th>
        <td>
          <?php echo $form['procesador']->renderError() ?>
          <?php echo $form['procesador'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tarjeta_madre']->renderLabel() ?></th>
        <td>
          <?php echo $form['tarjeta_madre']->renderError() ?>
          <?php echo $form['tarjeta_madre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['memoria_ram']->renderLabel() ?></th>
        <td>
          <?php echo $form['memoria_ram']->renderError() ?>
          <?php echo $form['memoria_ram'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['hostname']->renderLabel() ?></th>
        <td>
          <?php echo $form['hostname']->renderError() ?>
          <?php echo $form['hostname'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_retiro']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_retiro']->renderError() ?>
          <?php echo $form['fecha_retiro'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
