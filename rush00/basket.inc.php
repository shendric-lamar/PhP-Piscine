<?php
	function add_product($user, $img, $name, $price) {
		if ($name != '' && $img != '' && $price != '') {
			if (!file_exists("private/basket")) {
	            mkdir("private/basket");
				chmod("private/basket", 0755);
	        }
			if (!file_exists("private/basket/$user.csv")) {
	            file_put_contents("private/basket/" .$user. ".csv", null);
				chmod("private/basket/" .$user. ".csv", 0755);
	        }
			$amount = 0;
			$basket = unserialize(file_get_contents("private/basket/$user.csv"));
			foreach ($basket as $k => $p) {
				if ($name == $p["name"]) {
					$basket[$k]["amount"]++;
					echo $p["amount"];
					$amount++;
				}
			}
			if ($amount == 0) {
				$product = array (
	            	"img" => $img,
	            	"name" => $name,
	            	"price" => $price,
					"amount" => "1"
		        );
				$basket[] = $product;
			}
			file_put_contents("private/basket/$user.csv", serialize($basket));
		}
	}

	add_product($_GET['user'], $_GET['img'], $_GET['name'], $_GET['price']);
	header("Location: categories.php?msg=product_added_to_basket");
