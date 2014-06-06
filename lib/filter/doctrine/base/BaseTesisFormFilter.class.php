<?php

/**
 * Tesis filter form base class.
 *
 * @package    nuevo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTesisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_autor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'titulo'   => new sfValidatorPass(array('required' => false)),
      'id_autor' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tesis_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tesis';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'titulo'   => 'Text',
      'id_autor' => 'Number',
      'tipo_id'  => 'Number',
    );
  }
}
