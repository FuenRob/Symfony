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
	  <?php echo $sf_user->getUsername(); }?>
		</td>
    </tr>
	
	<tr>
    <td>
	  Tus tesis:
	</td>
    </tr>
	<?php foreach($tesi as $tesis): ?>
    <tr>
      <td>
        <?php echo link_to($tesis->gettitulo(), 'tesis/index?id='.$tesis->getId()); ?>
      </td>
    </tr>
	
  <?php endforeach; ?>

	</tbody>
</table>