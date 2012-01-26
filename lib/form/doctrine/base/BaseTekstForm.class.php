<?php

/**
 * Tekst form base class.
 *
 * @method Tekst getObject() Returns the current form's model object
 *
 * @package    clipboard
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTekstForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'contents'   => new sfWidgetFormTextarea(),
      'nazwa'      => new sfWidgetFormInputText(),
      'autor'      => new sfWidgetFormTextarea(),
      'skrot'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'contents'   => new sfValidatorString(array('max_length' => 4096, 'required' => false)),
      'nazwa'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'autor'      => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'skrot'      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tekst[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tekst';
  }

}
