<?php


/**
 * Skeleton subclass for representing a row from the 'Icabox' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Mon Apr 15 18:04:26 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Icabox extends BaseIcabox {

	public function __toString() {

		return $this->getNumeroSerie();
	}

} // Icabox
