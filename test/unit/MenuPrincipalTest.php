<?php
require_once(dirname(__FILE__).'/../bootstrap/Doctrine.php');
$test=new lime_test();
	foreach($secciones as $value){ ?>
	<div class="btn btn-center"><a href="#" class="btn btn-primary"><?php	echo $value->getSeccion(); ?></a></div>
	<div class="progress progress-danger progress-striped">
	<div class="bar" style="width: 50%"></div>
	</div><?php
	}
?>