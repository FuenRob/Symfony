<?php

/**
 * seccion actions.
 *
 * @package    sfforo
 * @subpackage seccion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ver_usuarioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->nombre = Doctrine
                      ::getTable('Tipo')
                      ->find($request->getParameter('id'))
                      ->getNombre();
    $this->tesis = Doctrine
                    ::getTable('Tesis')
                    ->createQuery('tesis')
                    ->where('tesis.tipo_id = ?', $request->getParameter('id'))
                    ->execute();
  }
}
