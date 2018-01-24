<?php

// Subpackage namespace
namespace LittleBizzy\DeleteExpiredTransients\Transients;

/**
 * Cron class
 *
 * @package Delete Expired Transients
 * @subpackage Transients
 */
class Cron {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Plugin factory object
	 */
	private $factory;



	/**
	 * Plugin info object
	 */
	private $plugin;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Constructor
	 */
	public function __construct($factory, $plugin) {

		// Plugin properties
		$this->factory = $factory;
		$this->plugin = $plugin;

		// Cron actions
		$this->initialize();
	}



	/**
	 * Start cron checks
	 */
	private function initialize() {

// Debug
$this->onSchedule();return;

		// Schedules filter
		add_filter('cron_schedules', [$this, 'schedules']);

		// Generation check
		if (!wp_next_scheduled($this->plugin->prefix.'_clean'))
			wp_schedule_event(time(), $this->plugin->prefix.'_interval', $this->plugin->prefix.'_clean');

		// Generation hook
		add_action($this->plugin->prefix.'_clean', [$this, 'onSchedule']);
	}



	// WP Hooks
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Add custom schedule
	 */
	public function schedules($schedules) {

		// Define period
		$seconds = 1;

		// Custom period
		$schedules[$this->plugin->prefix.'_interval'] = array(
			'interval' => $seconds,
			'display'  => __('Delete Expired Transients in '.$seconds.' seconds'),
		);

		// Done
		return $schedules;
	}



	/**
	 * Start the clean procedure
	 */
	public function onSchedule() {
		$this->factory->transients->cleanExpired();
	}



}