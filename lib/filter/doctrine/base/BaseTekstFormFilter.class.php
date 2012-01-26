<?php

/**
 * Tekst filter form base class.
 *
 * @package    clipboard
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTekstFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'contents'   => new sfWidgetFormFilterInput(),
      'nazwa'      => new sfWidgetFormFilterInput(),
      'autor'      => new sfWidgetFormFilterInput(),
      'skrot'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'contents'   => new sfValidatorPass(array('required' => false)),
      'nazwa'      => new sfValidatorPass(array('required' => false)),
      'autor'      => new sfValidatorPass(array('required' => false)),
      'skrot'      => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tekst_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tekst';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'contents'   => 'Text',
      'nazwa'      => 'Text',
      'autor'      => 'Text',
      'skrot'      => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
