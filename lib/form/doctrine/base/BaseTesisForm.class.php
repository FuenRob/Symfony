<?php

/**
 * Tesis form base class.
 *
 * @method Tesis getObject() Returns the current form's model object
 *
 * @package    nuevo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTesisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'titulo'   => new sfWidgetFormInputText(),
      'id_autor' => new sfWidgetFormInputText(),
      'tipo_id'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'   => new sfValidatorString(array('max_length' => 255)),
      'id_autor' => new sfValidatorInteger(),
      'tipo_id'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tesis[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tesis';
  }

}
