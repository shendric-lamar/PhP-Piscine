<?php
	require "header.php";
	include "products.php";
	$products = get_products();
?>
<html>
    <head>
        <title>Categories</title>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
			<?php
				if ($_GET['msg'] == "product_added_to_basket")
					echo "<p class='success'>Product Added To Basket!</p>";
			?>
			<h1 class="title-home">Glass</h1>
			<div class="glass">
				<?php
					foreach ($products as $p) {
 				    	if ($p["category"] == "glass") {
						echo "<div class='responsive'>";
		 				echo "<a href='basket.inc.php?user=".$_SESSION['logged_on_user']."&img=".$p['image']."&name=".$p['product']."&price=".$p['price']."'>";
		 				echo "<img class='img-size' src=".$p["image"]." alt=".$p["product"].">";
		 				echo "</a>";
		 				echo "<div class='desc'>".$p["description"]." €".$p['price']."</div>";
						echo "</div>";
					 }
				 }
				?>
			</div>
			<h1 class="title-home">Plastic</h1>
			<div class="glass">
				<?php
					foreach ($products as $p) {
 				    	if ($p["category"] == "plastic") {
						echo "<div class='responsive'>";
		 				echo "<a href='basket.inc.php?user=".$_SESSION['logged_on_user']."&img=".$p['image']."&name=".$p['product']."&price=".$p['price']."'>";
		 				echo "<img class='img-size' src=".$p["image"]." alt=".$p["product"].">";
		 				echo "</a>";
		 				echo "<div class='desc'>".$p["description"]." €".$p['price']."</div>";
						echo "</div>";
					 }
				 }
				?>
			</div>
            <hr class="line" >
            <h1 class="title-home">Soft</h1>
			<div class="glass">
				<?php
					foreach ($products as $p) {
 				    	if ($p["type"] == "soft") {
						echo "<div class='responsive'>";
		 				echo "<a href='basket.inc.php?user=".$_SESSION['logged_on_user']."&img=".$p['image']."&name=".$p['product']."&price=".$p['price']."'>";
		 				echo "<img class='img-size' src=".$p["image"]." alt=".$p["product"].">";
		 				echo "</a>";
		 				echo "<div class='desc'>".$p["description"]." €".$p['price']."</div>";
						echo "</div>";
					 }
				 }
				?>
			</div>
            <h1 class="title-home">Soda</h1>
			<div class="glass">
				<?php
					foreach ($products as $p) {
 				    	if ($p["type"] == "soda") {
						echo "<div class='responsive'>";
		 				echo "<a href='basket.inc.php?user=".$_SESSION['logged_on_user']."&img=".$p['image']."&name=".$p['product']."&price=".$p['price']."'>";
		 				echo "<img class='img-size' src=".$p["image"]." alt=".$p["product"].">";
		 				echo "</a>";
		 				echo "<div class='desc'>".$p["description"]." €".$p['price']."</div>";
						echo "</div>";
					 }
				 }
				?>
			</div>
            <h1 class="title-home">Alcohol</h1>
			<div class="glass">
				<?php
					foreach ($products as $p) {
 				    	if ($p["type"] == "alcohol") {
						echo "<div class='responsive'>";
		 				echo "<a href='basket.inc.php?user=".$_SESSION['logged_on_user']."&img=".$p['image']."&name=".$p['product']."&price=".$p['price']."'>";
		 				echo "<img class='img-size' src=".$p["image"]." alt=".$p["product"].">";
		 				echo "</a>";
		 				echo "<div class='desc'>".$p["description"]." €".$p['price']."</div>";
						echo "</div>";
					 }
				 }
				?>
			</div>
