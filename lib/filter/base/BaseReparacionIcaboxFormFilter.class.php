<?php

/**
 * ReparacionIcabox filter form base class.
 *
 * @package    icabox
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseReparacionIcaboxFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_icabox'    => new sfWidgetFormPropelChoice(array('model' => 'icabox', 'add_empty' => true)),
      'fecha_fallo'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'motivo_fallo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'solucion'     => new sfWidgetFormFilterInput(),
      'fecha_salida' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_icabox'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'icabox', 'column' => 'id')),
      'fecha_fallo'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'motivo_fallo' => new sfValidatorPass(array('required' => false)),
      'solucion'     => new sfValidatorPass(array('required' => false)),
      'fecha_salida' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('reparacion_icabox_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReparacionIcabox';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_icabox'    => 'ForeignKey',
      'fecha_fallo'  => 'Date',
      'motivo_fallo' => 'Text',
      'solucion'     => 'Text',
      'fecha_salida' => 'Date',
    );
  }
}
