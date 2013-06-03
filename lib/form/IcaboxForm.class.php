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

  protected $procesador = array('AMD' => 'AMD','Intel' => 'Intel', 'Desconocido' => 'Desconocido','Otro' => 'Otro');
  protected $tarjeta_madre = array('Gigabyte' => 'Gigabyte', 'Asus' => 'Asus', 'Foxconn' => 'Foxconn', 'PC chips'=>'PC chips', 'AsRock'=>'AsRock', 'Desconocido' => 'Desconocido', 'Otro' => 'Otro(a)');
  protected $memoria_ram = array('512MB' => '512MB','1GB' => '1GB', '2GB' => '2GB','4GB' => '4GB','8GB' => '8GB');


  public function configure() {
        parent::configure();
        unset($this['numero_serie'], $this['fecha_armado']);
        $this->setWidget('fecha_armado', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) - 40, date('Y', time())), range(date('Y', time()) - 40, date('Y', time())))
                )));
        $this->setWidget('fecha_retiro', new sfWidgetFormDate(array(
                    'format' => '%day%/%month%/%year%',
                    'years' => array_combine(range(date('Y', time()) + 10, date('Y', time())), range(date('Y', time()) + 10, date('Y', time())))
                )));
        $this->setWidget('procesador', new sfWidgetFormChoice(array('choices' => $this->procesador)));
        $this->setWidget('tarjeta_madre', new sfWidgetFormChoice(array('choices' => $this->tarjeta_madre)));
        $this->setWidget('memoria_ram', new sfWidgetFormChoice(array('choices' => $this->memoria_ram)));

}
  protected function doSave($con = null) {

          switch ($this->getValue('procesador')) {
            case 'AMD':           $procesador_numero=0; break;
            case 'Intel':         $procesador_numero=1; break;
            case 'Otro':          $procesador_numero=2; break;
            case 'Desconocido':   $procesador_numero=3; break;
          }

          switch ($this->getValue('tarjeta_madre')) {
            case 'Gigabyte':    $mother_number= 0; break;
            case 'Asus':        $mother_number= 1; break;
            case 'Foxconn':     $mother_number= 2; break;
            case 'PC chips':    $mother_number= 3; break;
            case 'AsRock':      $mother_number= 4; break;
            case 'Desconocido': $mother_number= 5; break;
            case 'Otro':        $mother_number= 6; break;
          }

          switch ($this->getValue('memoria_ram')) {
            case '512MB': $memoria_numero=0; break;
            case '1GB':   $memoria_numero=1; break;
            case '2GB':   $memoria_numero=2; break;
            case '4GB':   $memoria_numero=3; break;
            case '8GB':   $memoria_numero=4; break;
          }

          $this->object->setNumeroserie(time().$procesador_numero.$mother_number.$memoria_numero);
          $this->object->setFechaArmado(date('m.d.y'));
          parent::doSave($con);
        }

      }
