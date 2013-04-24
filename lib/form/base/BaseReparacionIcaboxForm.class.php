<?php

/**
 * ReparacionIcabox form base class.
 *
 * @method ReparacionIcabox getObject() Returns the current form's model object
 *
 * @package    icabox
 * @subpackage form
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseReparacionIcaboxForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'id_icabox'        => new sfWidgetFormPropelChoice(array('model' => 'icabox', 'add_empty' => false)),
      'fecha_fallo'      => new sfWidgetFormDate(),
      'motivo_fallo'     => new sfWidgetFormTextarea(),
      'solucion'         => new sfWidgetFormTextarea(),
      'fecha_produccion' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_icabox'        => new sfValidatorPropelChoice(array('model' => 'icabox', 'column' => 'id')),
      'fecha_fallo'      => new sfValidatorDate(),
      'motivo_fallo'     => new sfValidatorString(),
      'solucion'         => new sfValidatorString(array('required' => false)),
      'fecha_produccion' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reparacion_icabox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReparacionIcabox';
  }


}
