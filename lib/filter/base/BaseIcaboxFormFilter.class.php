<?php

/**
 * icabox filter form base class.
 *
 * @package    icabox
 * @subpackage filter
 * @author     Abraham Rafael Rico Moreno
 */
abstract class BaseicaboxFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero_serie'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_armado'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'procesador'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tarjeta_madre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'memoria_ram'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hostname'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_retiro'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'numero_serie'  => new sfValidatorPass(array('required' => false)),
      'fecha_armado'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'procesador'    => new sfValidatorPass(array('required' => false)),
      'tarjeta_madre' => new sfValidatorPass(array('required' => false)),
      'memoria_ram'   => new sfValidatorPass(array('required' => false)),
      'hostname'      => new sfValidatorPass(array('required' => false)),
      'fecha_retiro'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('icabox_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'icabox';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'numero_serie'  => 'Text',
      'fecha_armado'  => 'Date',
      'procesador'    => 'Text',
      'tarjeta_madre' => 'Text',
      'memoria_ram'   => 'Text',
      'hostname'      => 'Text',
      'fecha_retiro'  => 'Date',
    );
  }
}
