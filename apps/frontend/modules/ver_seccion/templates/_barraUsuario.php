<?php if($sf_user->isAuthenticated()){ ?>
  <?php echo $sf_user->getUsername(); ?> / <?php echo link_to("Cierra sesión", "@logout") ?>
<?php }  ?>
