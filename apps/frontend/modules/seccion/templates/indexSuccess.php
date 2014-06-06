        <?php echo image_tag('banner-1.png'); ?>
<table class="table table-striped table-bordered">
  <thead>
    <th>Índice de las tesis de <?php echo $nombre; ?></th>
  </thead>
<?php foreach($tesis as $tesi): ?>
  <tr>
    <td>
      <?php echo link_to($tesi->getTitulo(), 'ver_tesis/index?id='.$tesi->getId()); ?>
    </td>
  </tr>
  <tr>
    <td>
	<?php if($sf_user->isAuthenticated()){ ?>
      <?php echo button_to('Añadir tesis','tesis/new', array('class' => 'btn btn-primary')); ?>
	  <?php } ?>
    </td>
  </tr>
  
<?php endforeach; ?>
<tr>
      <td>
        <?php echo image_tag('banner-2.png'); ?>
      </td>
    </tr>
</table>