<?php

/**
 * TesisTema form base class.
 *
 * @method TesisTema getObject() Returns the current form's model object
 *
 * @package    nuevo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTesisTemaForm extends TesisForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['id_tipo'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo'), 'add_empty' => false));
    $this->validatorSchema['id_tipo'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo')));

    $this->widgetSchema   ['id_tesis'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis'), 'add_empty' => false));
    $this->validatorSchema['id_tesis'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis')));

    $this->widgetSchema   ['texto'] = new sfWidgetFormTextarea();
    $this->validatorSchema['texto'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema->setNameFormat('tesis_tema[%s]');
  }

  public function getModelName()
  {
    return 'TesisTema';
  }

}
