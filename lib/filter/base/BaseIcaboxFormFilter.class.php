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
      'nombre_icabox' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_armado'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'procesador'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tarjeta_madre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'memoria_ram'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'disco_duro'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lugar_destino' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_retiro'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nombre_icabox' => new sfValidatorPass(array('required' => false)),
      'fecha_armado'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'procesador'    => new sfValidatorPass(array('required' => false)),
      'tarjeta_madre' => new sfValidatorPass(array('required' => false)),
      'memoria_ram'   => new sfValidatorPass(array('required' => false)),
      'disco_duro'    => new sfValidatorPass(array('required' => false)),
      'lugar_destino' => new sfValidatorPass(array('required' => false)),
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
      'nombre_icabox' => 'Text',
      'fecha_armado'  => 'Date',
      'procesador'    => 'Text',
      'tarjeta_madre' => 'Text',
      'memoria_ram'   => 'Text',
      'disco_duro'    => 'Text',
      'lugar_destino' => 'Text',
      'fecha_retiro'  => 'Date',
    );
  }
}
