<?php

/**
 * Apartado filter form base class.
 *
 * @package    nuevo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApartadoFormFilter extends TesisFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['introduccion'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['introduccion'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['materiales'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['materiales'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['metodologia'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['metodologia'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['procedimiento'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['procedimiento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['resultados'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['resultados'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['conclusion'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['conclusion'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['bibliografia'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['bibliografia'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['tesis_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis'), 'add_empty' => true));
    $this->validatorSchema['tesis_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tesis'), 'column' => 'id'));

    $this->widgetSchema->setNameFormat('apartado_filters[%s]');
  }

  public function getModelName()
  {
    return 'Apartado';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'introduccion' => 'Text',
      'materiales' => 'Text',
      'metodologia' => 'Text',
      'procedimiento' => 'Text',
      'resultados' => 'Text',
      'conclusion' => 'Text',
      'bibliografia' => 'Text',
      'tesis_id' => 'ForeignKey',
    ));
  }
}
