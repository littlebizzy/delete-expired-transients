<?php

// Subpackage namespace
namespace LittleBizzy\DeleteExpiredTransients\Transients;

/**
 * Transients class
 *
 * @package Delete Expired Transients
 * @subpackage Transients
 */
class Transients {



	/**
	 * Remove expired transients using default values
	 * or their equivalent constants
	 */
	public function cleanExpired() {

		// Compose sentence
		$sql = "
			DELETE
				a, b
			FROM
				{$wpdb->options} a, {$wpdb->options} b
			WHERE
				a.option_name LIKE '%_transient_%' AND
				a.option_name NOT LIKE '%_transient_timeout_%' AND
				b.option_name = CONCAT(
					'_transient_timeout_',
						SUBSTRING(
							a.option_name,
							CHAR_LENGTH('_transient_') + 1
						)
				) AND
				b.option_value < UNIX_TIMESTAMP()
				LIMIT {$limit}
		";

	}



}