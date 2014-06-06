<?php

/**
 * SeccionTesis filter form base class.
 *
 * @package    nuevo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSeccionTesisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('seccion_tesis_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeccionTesis';
  }

  public function getFields()
  {
    return array(
      'seccion_id' => 'Number',
      'tesis_id'   => 'Number',
    );
  }
}
