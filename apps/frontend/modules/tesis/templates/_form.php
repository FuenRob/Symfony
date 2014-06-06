<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('tesis/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(true) ?>
          &nbsp;<a href="<?php echo url_for('tesis/index') ?>">Volver a inicio</a>
          <?php if (!$form->getObject()->isNew()): ?>
			<?php if($sf_user->isAuthenticated()): ?>
			<?php if($sf_user->getUsername() == 'admin'): ?>
            &nbsp;<?php echo link_to('Eliminar', 'tesis/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Seguro?')) ?>
			<?php endif; ?>
			<?php endif; ?>
		  <?php endif; ?>
		  <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo button_to('Rellenar Tesis', 'apartado/new?id='.$form->getObject()->getId()) ?>
          <?php endif; ?>
          <input type="submit" value="guardar"/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo $form['tipo_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_id']->renderError() ?>
          <?php echo $form['tipo_id'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo$form['id_autor']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_autor']->renderError() ?>
          <?php echo $form['id_autor'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
