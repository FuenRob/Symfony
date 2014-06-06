<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('apartado/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(true) ?>
          &nbsp;<a href="<?php echo url_for('apartado/index') ?>">Volver a inicio</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Eliminar', 'apartado/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Seguro?')) ?>
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
        <th><?php echo $form['introduccion']->renderLabel() ?></th>
        <td>
          <?php echo $form['introduccion']->renderError() ?>
          <?php echo $form['introduccion'] ?>
        </td>
      </tr><tr>
        <th><?php echo $form['materiales']->renderLabel() ?></th>
        <td>
          <?php echo $form['materiales']->renderError() ?>
          <?php echo $form['materiales'] ?>
        </td>
      </tr><tr>
        <th><?php echo $form['metodologia']->renderLabel() ?></th>
        <td>
          <?php echo $form['metodologia']->renderError() ?>
          <?php echo $form['metodologia'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo $form['procedimiento']->renderLabel() ?></th>
        <td>
          <?php echo $form['procedimiento']->renderError() ?>
          <?php echo $form['procedimiento'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo $form['resultados']->renderLabel() ?></th>
        <td>
          <?php echo $form['resultados']->renderError() ?>
          <?php echo $form['resultados'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo $form['conclusion']->renderLabel() ?></th>
        <td>
          <?php echo $form['conclusion']->renderError() ?>
          <?php echo $form['conclusion'] ?>
        </td>
      </tr>
	  <tr>
        <th><?php echo $form['bibliografia']->renderLabel() ?></th>
        <td>
          <?php echo $form['bibliografia']->renderError() ?>
          <?php echo $form['bibliografia'] ?>
        </td>
      </tr>
        <th><?php echo$form['id_autor']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_autor']->renderError() ?>
          <?php echo $form['id_autor'] ?>
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
        <th><?php echo$form['tesis_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tesis_id']->renderError() ?>
          <?php echo $form['tesis_id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
