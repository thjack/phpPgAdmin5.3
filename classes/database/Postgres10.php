<?php

/**
 * PostgreSQL 10.1 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres101 extends Postgres {

	var $major_version = 10.1;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function Postgres10($conn) {
		$this->Postgres($conn);
	}

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc101.php');
		return $this->help_page;
	}

}
?>
