<?php

// Subpackage namespace
namespace LittleBizzy\DeleteExpiredTransients\Core;

// Aliased namespaces
use \LittleBizzy\DeleteExpiredTransients\Transients;
use \LittleBizzy\DeleteExpiredTransients\Helpers;

/**
 * Object Factory class
 *
 * @package Delete Expired Transients
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Actions object
	 */
	protected function createCron() {
		return new Transients\Cron($this, $this->plugin);
	}


	/**
	 * Filters object
	 */
	protected function createTransients() {
		return new Transients\Transients;
	}



}