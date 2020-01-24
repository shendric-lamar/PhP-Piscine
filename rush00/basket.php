<?php
	require "header.php";
	if ($_GET['basket'])
		echo "<p class='success'>Basket Cleared!</p>";
?>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<?php
	$user = $_SESSION['logged_on_user'];
	$basket = unserialize(file_get_contents("private/basket/$user.csv"));
	if ($basket == '') {
?>
	<div id='basket-box'>
		<div class='content'>
			<i id="empty" class="material-icons">shopping_cart</i>
		</div>
	</div>
<?php
	}
	else {
		$total = 0;
		foreach ($basket as $p) {
			$price = ($p['price'] * $p['amount']);
			$total = $total + $price;
		}
		foreach ($basket as $p) {
			echo "<div class='glass'>";
			echo "<div class='responsive'>";
			echo "<img class='img-size' src=".$p["img"]." alt=".$p["product"].">";
			echo "<div class='desc'>".$p["amount"]."x ".$p["name"]." €".$p['price']."</div>";
			echo "</div>";
			echo "</div>";
		}
		echo "<h1 class='title-home'>Total: €".$total."</h1>";
?>
<div id="validate-box">
	<div class="content">
		<div>
			<button type="submit" class="sign-up"><a class="link" href="validate.php">Validate Order</a></button>
			<button type="submit" class="sign-up"><a class="link" href="clear_basket.php">Clear Basket</a></button>
		</div>
	</div>
</div>
<?php
}
?>
