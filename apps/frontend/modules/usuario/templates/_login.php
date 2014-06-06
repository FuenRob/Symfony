<div id="div-login" align="right">
  <form class="well form-inline" style="width:auto" method="POST" action="resultado.php">
    <div id="div-login-inicio" style="width:auto; margin-right:0%;">
	<?php if($sf_user->isAuthenticated()){ ?>
	Bienvenido, <?php echo link_to($sf_user->getUsername(), 'ver_usuario/index'); ?>
	<?php echo button_to('Salir', '@cerrarSesion', array('class' => 'btn btn-danger'))?>
	 <!-- <button type="submit" class="btn btn-warning" id="btn-identificar">Idéntificate</button>-->
	<?php }else{  ?>
	<?php echo button_to('Registro', '@registro', array('class' => 'btn btn-info'))?>
	<?php echo button_to('Identificarse', '@iniciarSesion', array('class' => 'btn btn-success'))?>
	<?php } ?>
	
	<?php //include_component('sfGuardAuth', 'signin_form'); ?>
    </div>
	
	<br>
	Buscar: <input type="text" id="tesis" name="tesis"> <input type="submit" value="Buscar"/>
    
	
	<div id="div-login-entrar" class="hidden">
      <input type="text" class="input-small" placeholder="Username">
      <input type="password" class="input-small" placeholder="Password">
      <button type="submit" class="btn btn-success">Entrar</button>
      <br>
      <label class="checkbox">
        <input type="checkbox"> Recordar
      </label>
    </div>
  </form>
  <!--
  <div class="div-login-identificado">
    Nombre Completo (username)
    <br>
    <a href="#" class="btn btn-mini btn-success">Panel de control</a>
    <a href="#" class="btn btn-mini btn-danger">Cerrar sesion</a>
  </div>
  -->
</div>
