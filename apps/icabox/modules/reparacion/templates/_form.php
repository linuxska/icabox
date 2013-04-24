<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('reparacion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a class="btn btn-secundary" href="<?php echo url_for('reparacion/index') ?>">Back to list</a>
         <span class="btn btn-secundary"> <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'reparacion/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Estas seguro?')) ?>
          <?php endif; ?>
          </span>
          <input  class="btn btn-primary" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_icabox']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_icabox']->renderError() ?>
          <?php echo $form['id_icabox'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_fallo']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_fallo']->renderError() ?>
          <?php echo $form['fecha_fallo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['motivo_fallo']->renderLabel() ?></th>
        <td>
          <?php echo $form['motivo_fallo']->renderError() ?>
          <?php echo $form['motivo_fallo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['solucion']->renderLabel() ?></th>
        <td>
          <?php echo $form['solucion']->renderError() ?>
          <?php echo $form['solucion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_produccion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_produccion']->renderError() ?>
          <?php echo $form['fecha_produccion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
