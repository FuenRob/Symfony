<?php

/**
 * AutorTesis form base class.
 *
 * @method AutorTesis getObject() Returns the current form's model object
 *
 * @package    nuevo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAutorTesisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tesis_id' => new sfWidgetFormInputHidden(),
      'autor_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'tesis_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tesis_id')), 'empty_value' => $this->getObject()->get('tesis_id'), 'required' => false)),
      'autor_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('autor_id')), 'empty_value' => $this->getObject()->get('autor_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('autor_tesis[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AutorTesis';
  }

}
