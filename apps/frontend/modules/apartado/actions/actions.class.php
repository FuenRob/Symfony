<?php

/**
 * noticia actions.
 *
 * @package    clase
 * @subpackage apartado
 * @author     Anonimous
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apartadoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->apartado = Doctrine_Core::getTable('Apartado')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ApartadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ApartadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apartado = Doctrine_Core::getTable('Apartado')->find(array($request->getParameter('id'))), sprintf('El apartado no existe (%s).', $request->getParameter('id')));
    $this->form = new ApartadoForm($apartado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($apartado = Doctrine_Core::getTable('Apartado')->find(array($request->getParameter('id'))), sprintf('El apartado no existe (%s).', $request->getParameter('id')));
    $this->form = new apartadoForm($apartado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($apartado = Doctrine_Core::getTable('Apartado')->find(array($request->getParameter('id'))), sprintf('El apartado no existe (%s).', $request->getParameter('id')));
    $apartado->delete();

    $this->redirect('apartado/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $apartado = $form->save();

      $this->redirect('apartado/edit?id='.$apartado->getId());
    }
  }
}
