<?php

/**
 * noticia actions.
 *
 * @package    clase
 * @subpackage Tesis
 * @author     Anonimous
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tesisActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tesi = Doctrine_Core::getTable('Tesis')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TesisForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TesisForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
	
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tesi = Doctrine_Core::getTable('Tesis')->find(array($request->getParameter('id'))), sprintf('Object tesis does not exist (%s).', $request->getParameter('id')));
    $this->form = new TesisForm($tesi);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tesi = Doctrine_Core::getTable('Tesis')->find(array($request->getParameter('id'))), sprintf('Object tesis does not exist (%s).', $request->getParameter('id')));
    $this->form = new TesisForm($tesi);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tesis = Doctrine_Core::getTable('Tesis')->find(array($request->getParameter('id'))), sprintf('Object tesis does not exist (%s).', $request->getParameter('id')));
    $tesis->delete();

    $this->redirect('tesis/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tesi = $form->save();

      $this->redirect('tesis/edit?id='.$tesi->getId());
    }
  }
}
