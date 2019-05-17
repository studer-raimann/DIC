<?php

namespace srag\DIC\DIC;

use srag\DIC\Database\DatabaseDetector;
use srag\DIC\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\DIC
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class AbstractDIC implements DICInterface {

	/**
	 * AbstractDIC constructor
	 */
	protected function __construct() {

	}


	/**
	 * @inheritdoc
	 */
	public function database(): DatabaseInterface {
		return DatabaseDetector::getInstance($this->databaseCore());
	}
}
