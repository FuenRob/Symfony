
<table class="table table-striped table-bordered">
  <thead>
  <th>
	<?php echo button_to('INICIO', '@homepage', array('class' => 'btn btn-primary'))?>
	<?php echo button_to('Categorias', 'ver_seccion/index', array('class' => 'btn btn-primary'))?>
  </th>
  </thead>
  <tbody>
	<?php if($sf_user->isAuthenticated()){ ?>
	<tr>
      <td>
	  <?php echo $sf_user->getUsername() ?>
		</td>
    </tr>
	<tr>
      <td>
	  Tus tesis:
	</td>
    </tr>
	<tr>
    <td>
	<?php foreach($tesis as $tesi): ?>
      <?php echo link_to($tesi->getTitulo(), 'ver_tesis/index?id='.$tesi->getId()); ?>
    </td>
	</tr>
	<tr>
		<td>
			<?php echo button_to('Editar tesis','apartado/edit', array('class' => 'btn btn-primary')); ?>
		</td>
    </tr>
	<?php endforeach; ?>
	<?php } ?>
	</tbody>
</table>