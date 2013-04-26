<?php

/**
 * icabox form base class.
 *
 * @method icabox getObject() Returns the current form's model object
 *
 * @package    icabox
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseicaboxForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'numero_serie'  => new sfWidgetFormInputText(),
      'fecha_armado'  => new sfWidgetFormDate(),
      'procesador'    => new sfWidgetFormInputText(),
      'tarjeta_madre' => new sfWidgetFormInputText(),
      'memoria_ram'   => new sfWidgetFormInputText(),
      'hostname'      => new sfWidgetFormInputText(),
      'fecha_retiro'  => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'numero_serie'  => new sfValidatorString(array('max_length' => 64)),
      'fecha_armado'  => new sfValidatorDate(),
      'procesador'    => new sfValidatorString(array('max_length' => 32)),
      'tarjeta_madre' => new sfValidatorString(array('max_length' => 45)),
      'memoria_ram'   => new sfValidatorString(array('max_length' => 32)),
      'hostname'      => new sfValidatorString(array('max_length' => 64)),
      'fecha_retiro'  => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('icabox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'icabox';
  }


}
