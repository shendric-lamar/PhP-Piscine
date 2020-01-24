<?php
	class NightsWatch implements IFighter {
		private $res;

		public function recruit($person) {
			if ($person instanceof IFighter) {
				$person->fight();
			}
		}
		public function fight() {
		}
	}
