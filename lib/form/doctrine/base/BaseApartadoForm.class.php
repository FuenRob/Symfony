<?php

/**
 * Apartado form base class.
 *
 * @method Apartado getObject() Returns the current form's model object
 *
 * @package    nuevo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseApartadoForm extends TesisForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['introduccion'] = new sfWidgetFormTextarea();
    $this->validatorSchema['introduccion'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['materiales'] = new sfWidgetFormTextarea();
    $this->validatorSchema['materiales'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['metodologia'] = new sfWidgetFormTextarea();
    $this->validatorSchema['metodologia'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['procedimiento'] = new sfWidgetFormTextarea();
    $this->validatorSchema['procedimiento'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['resultados'] = new sfWidgetFormTextarea();
    $this->validatorSchema['resultados'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['conclusion'] = new sfWidgetFormTextarea();
    $this->validatorSchema['conclusion'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['bibliografia'] = new sfWidgetFormTextarea();
    $this->validatorSchema['bibliografia'] = new sfValidatorString(array('max_length' => 50000));

    $this->widgetSchema   ['tesis_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis'), 'add_empty' => false));
    $this->validatorSchema['tesis_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis')));

    $this->widgetSchema->setNameFormat('apartado[%s]');
  }

  public function getModelName()
  {
    return 'Apartado';
  }

}
