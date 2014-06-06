<?php

/**
 * home actions.
 *
 * @package    sfforo
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ver_tesisActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');

  /* if($this->getUser()->isAuthenticated())
	{$this->banderin=1;}
   else{$this->banderin=0;}*/

	$this->apartados = Doctrine
                    ::getTable('Apartado')
                    ->createQuery('apartado')
                    ->where('apartado.tipo_id = ?', $request->getParameter('id'))
                    ->execute();
  }

}
