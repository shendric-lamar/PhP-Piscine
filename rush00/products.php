<?php
    function get_products() {
        $open = fopen("products.csv", "r");
        while (($product = fgetcsv($open, 1000, ";")) !== FALSE)
        {
            $boucleProduct = array (
            "product" => $product[0],
            "category" => $product[1],
            "type" => $product[2],
            "image" => $product[3],
            "description" => $product[4],
            "price" => $product[5]
        	);
        	$everyProduct[] = $boucleProduct;
    	}
		return($everyProduct);
	}
?>
