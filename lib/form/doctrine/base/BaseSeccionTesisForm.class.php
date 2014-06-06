<?php

/**
 * SeccionTesis form base class.
 *
 * @method SeccionTesis getObject() Returns the current form's model object
 *
 * @package    nuevo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSeccionTesisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seccion_id' => new sfWidgetFormInputHidden(),
      'tesis_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'seccion_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('seccion_id')), 'empty_value' => $this->getObject()->get('seccion_id'), 'required' => false)),
      'tesis_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tesis_id')), 'empty_value' => $this->getObject()->get('tesis_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('seccion_tesis[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeccionTesis';
  }

}
