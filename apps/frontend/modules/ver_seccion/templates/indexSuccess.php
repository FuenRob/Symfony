<?php echo image_tag('banner-1.png'); ?>
<table class="table table-striped table-bordered">
  <thead>
    <th>
	<?php echo button_to('INICIO', '@homepage', array('class' => 'btn btn-primary'))?>
	<?php echo button_to('Categorias', 'ver_seccion/index', array('class' => 'btn btn-primary'))?>
	<?php if($sf_user->isAuthenticated()){ ?>
	<?php echo button_to('Añadir tesis','tesis/new', array('class' => 'btn btn-primary')); ?>
	<?php echo button_to('Mi Cuenta', 'ver_usuario/index', array('class' => 'btn btn-primary'))?>
	<?php }else{  ?>
	<?php } ?>
    </th>
  </thead>
  <tbody>
  <?php foreach($secciones as $seccion): ?>
    <tr>
      <td>
        <?php echo link_to($seccion->getNombre(), 'seccion/index?id='.$seccion->getId()); ?>
      </td>
    </tr>
	
  <?php endforeach; ?>
  <tr>
      <td>
<?php echo image_tag('banner-2.png'); ?>
      </td>
    </tr>
  </tbody>
</table>