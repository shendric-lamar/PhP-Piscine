<?php
	function amount($user) {
		$basket = unserialize(file_get_contents("private/basket/$user.csv"));
		if ($basket == '')
			return ("0");
		else {
			$total = 0;
			foreach ($basket as $p) {
				$amount = $p['amount'];
				$total = $total + $amount;
			}
			return ($total);
			var_dump($total);
		}
	}

	function price($user) {
		$basket = unserialize(file_get_contents("private/basket/$user.csv"));
		if ($basket == '')
			return ("0");
		else {
			$total = 0;
			foreach ($basket as $p) {
				$price = ($p['price'] * $p['amount']);
				$total = $total + $price;
			}
			return ($total);
			var_dump($total);
		}
	}
