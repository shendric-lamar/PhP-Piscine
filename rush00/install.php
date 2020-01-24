<?php
	if (!file_exists("products.csv")) {
		touch("products.csv");
		$line = 'water;plastic;soft;https://cdn.shopify.com/s/files/1/0051/7262/5477/products/fiji-bottle-500ml-front_900x900.png?v=1570053656 ;Water Bottle Plastic;1
sparkling;plastic;soft;https://www.quill.com/is/image/Quill/sp42804515_s7?$img400$ ;Sparkling Bottle Plastic;1
juice;plastic;soft;https://farmaciaweb.net/wp-content/uploads/2016/10/0907-600x600.png ;Juice Bottle Plastic;1
coca;glass;soda;http://assets.stickpng.com/thumbs/580b57fbd9996e24bc43c0de.png ;Cocacola Bottle Glass;2
fanta;glass;soda;https://images.freshop.com/00049000047851/25624df5042eccf5b48f62a30b528ea5_large.png ;Fanta Bottle Glass;2
pepsi;glass;soda;http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c1df.png ;Pepsi Bottle Glass;2
vodka;glass;alcohol;https://images.freshop.com/186935/2f67983db68777e365c2c7289e142dd9_large.png ;Vodka Bottle Glass;15
gin;glass;alcohol;https://n7j8v6c3.stackpathcdn.com/rest/images/2019/06/03/1345865.jpg/minImageFormat/400px ;Gin Bottle Glass;35
wine;glass;alcohol;https://winesdirect.ie/pub/media/catalog/product/cache/10f519365b01716ddb90abc57de5a837/1/1/11055.png ;Wine Bottle Glass;8';
		file_put_contents("products.csv", $line);
	}
?>
