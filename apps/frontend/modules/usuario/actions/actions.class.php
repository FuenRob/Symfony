<?php

/**
 * usuario actions.
 *
 * @package    sfforo
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  $this->tesis = Doctrine
                    ::getTable('Tesis')
                    ->createQuery('tesis')
                    ->where('tesis.id_autor=?', $request->getParameter('id'))
                    ->execute();
  }
}
