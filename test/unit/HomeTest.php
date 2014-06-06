<?php
require_once(dirname(__FILE__).'/../bootstrap/Doctrine.php');
$test=new lime_test(1);
#----- testear la clase Autor-----------------------
$autor = new Autor();
$test->is('Autor',$autor->className());
?>