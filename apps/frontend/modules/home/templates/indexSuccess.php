        <?php echo image_tag('banner-1.png'); ?>
<table class="table table-striped table-bordered">
  <thead>
    <th>
	<?php echo button_to('INICIO', '@homepage', array('class' => 'btn btn-primary'))?>
	<?php echo button_to('Categorias', 'ver_seccion/index', array('class' => 'btn btn-primary'))?>
	<?php if($sf_user->isAuthenticated()){ ?>
	<?php echo button_to('Añadir tesis','tesis/new', array('class' => 'btn btn-primary')); ?>
	<?php echo button_to('Mi Cuenta', 'usuario/index', array('class' => 'btn btn-primary'))?>
	<?php }else{  ?>
	<?php } ?>
    </th>
  </thead>
  <tbody>  
    <tr>
      <td>
        <?php echo image_tag('bienvenido.png'); ?>
      </td>
    </tr>
	<tr>
      <td>
        <?php echo image_tag('banner-2.png'); ?>
      </td>
    </tr> 
  </tbody>
</table>