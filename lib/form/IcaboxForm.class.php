<?php

/**
 * Icabox form.
 *
 * @package    icabox
 * @subpackage form
 * @author     Your name here
 */
class IcaboxForm extends BaseIcaboxForm
{

  protected $procesador = array('AMD' => 'AMD','Intel' => 'Intel', 'Desconocido' => 'Desconocido','Otro' => 'Otro(a)');
  protected $tarjeta_madre = array('Gigabyte' => 'Gigabyte', 'Asus' => 'Asus', 'Foxconn' => 'Foxconn', 'PC chips'=>'PC chips', 'AsRock'=>'AsRock', 'Desconocido' => 'Desconocido', 'Otro' => 'Otro(a)');


  public function configure() {
        parent::configure();
        $this->setWidget('fecha_armado', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 40, date('Y', time())), range(date('Y', time()) - 40, date('Y', time())))
                )));
        $this->setWidget('fecha_retiro', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 100, date('Y', time())), range(date('Y', time()) - 100, date('Y', time())))
                )));
        $this->setWidget('procesador', new sfWidgetFormChoice(array('choices' => $this->procesador)));
        $this->setWidget('tarjeta_madre', new sfWidgetFormChoice(array('choices' => $this->tarjeta_madre)));

}
}
