<?php
	class VersionValidator {

		/**
		 * Validates a version
		 *
		 * @param string $version
	 	 * @return bool
		 */

		public static function validate($version) {
			return preg_match('/^([v]|)+(\d|)+(\.(\d{1,3})){0,2}+(-(pre|beta|b|RC|alpha|a|pl|p)([\.]?(\d+))?)?$/', $version);
		}

	}

?>
