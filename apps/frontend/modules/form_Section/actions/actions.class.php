<?php

/**
 * form_Section actions.
 *
 * @package    sfforo
 * @subpackage form_Section
 * @author     Daniel López
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form_SectionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->seccions = Doctrine_Core::getTable('Tipo')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new SeccionForm($tipo);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $this->form = new TipoForm($tipo);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipo = Doctrine_Core::getTable('Tipo')->find(array($request->getParameter('id'))), sprintf('Object tipo does not exist (%s).', $request->getParameter('id')));
    $tipo->delete();

    $this->redirect('form_Section/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $seccion = $form->save();

      $this->redirect('form_Section/edit?id='.$seccion->getId());
    }
  }
}
