<?php

// Subpackage namespace
namespace LittleBizzy\DeleteExpiredTransients\Core;

/**
 * Core class
 *
 * @package Delete Expired Transients
 * @subpackage Core
 */
final class Core {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Single class instance
	 */
	private static $instance;



	/**
	 * Factory object
	 */
	private $factory;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Create or retrieve instance
	 */
	public static function instance($plugin = null) {

		// Check instance
		if (!isset(self::$instance))
			self::$instance = new self($plugin);

		// Done
		return self::$instance;
	}



	/**
	 * Constructor
	 */
	private function __construct($plugin) {

		// Init factory
		$this->factory = new Factory($plugin);

		// Start the process
		$this->factory->cron();
	}



}