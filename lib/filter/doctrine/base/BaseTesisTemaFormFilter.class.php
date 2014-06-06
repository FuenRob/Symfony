<?php

/**
 * TesisTema filter form base class.
 *
 * @package    nuevo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTesisTemaFormFilter extends TesisFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['id_tipo'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipo'), 'add_empty' => true));
    $this->validatorSchema['id_tipo'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tipo'), 'column' => 'id'));

    $this->widgetSchema   ['id_tesis'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tesis'), 'add_empty' => true));
    $this->validatorSchema['id_tesis'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tesis'), 'column' => 'id'));

    $this->widgetSchema   ['texto'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['texto'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('tesis_tema_filters[%s]');
  }

  public function getModelName()
  {
    return 'TesisTema';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'id_tipo' => 'ForeignKey',
      'id_tesis' => 'ForeignKey',
      'texto' => 'Text',
    ));
  }
}
