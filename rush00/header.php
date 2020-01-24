<?php
    session_start();
	include ("amount.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <met name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav-list">
                    <?php
                        $page = basename($_SERVER['PHP_SELF']);
                    ?>
                        <li class="nav"><a class="nav-link <?= ($page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
                        <li class="nav"><a class="nav-link <?= ($page == 'categories.php') ? 'active' : ''; ?>" href="categories.php">Categories</a></li>
						<?php
							if ($_SESSION["logged_on_user"] != "")
								echo "<li class='nav'><a class='nav-link ($page == 'profile.php') ? 'active' : '';' href='profile.php'>Profile</a></li>";
						?>
						<?php
							if ($_SESSION["logged_on_user"] == "admin")
								echo "<li class='nav'><a class='nav-link ($page == 'admin.php') ? 'active' : '';' href='admin.php'>Admin</a></li>"
						?>
                        <li class="nav" style="float:right;"><a class="nav-link" href="<?= ($_SESSION["logged_on_user"] != "") ? 'logout.php' : 'login.php'; ?>"><?= ($_SESSION["logged_on_user"] != "") ? 'Log Out' : 'Log In'; ?></a></li>
						<li class="nbr" style="size: 40px;float:right;"><?=amount($_SESSION["logged_on_user"])?></li>
						<li class="nav" style="size: 40px;float:right;"><a class="material-icons nav-link <?= ($page == 'basket.php') ? 'active' : ''; ?>" href="basket.php">shopping_cart</a></li>
						<li class="price" style="size: 40px;float:right;">€<?=price($_SESSION["logged_on_user"])?></li>
                </ul>
            </nav>
        </header>
    </body>
</html>
