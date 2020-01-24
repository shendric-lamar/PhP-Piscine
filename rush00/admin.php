<?php
	require ("header.php");
	$user = $_SESSION['logged_on_user'];
	if ($user != 'admin')
		header("Location: index.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
			<?php
				if ($_GET['user'] == "deleted") {
					echo "<p class='success'>User Deleted!</p>";
				}
				if ($_GET['user'] == "created") {
					echo "<p class='success'>User Created!</p>";
				}
				if ($_GET['user'] == "modified") {
					echo "<p class='success'>User Modified!</p>";
				}
				if ($_GET['msg'] == "pa") {
					echo "<p class='success'>Product Added!</p>";
				}
			?>
            <div id="validate-box">
                <div class="content">
                    <div>
						<button type="submit" class="sign-up"><a class="link" href="admin_modify_user.php">modify users</a></button>
						<button type="submit" class="sign-up"><a class="link" href="admin_add_product.php">add product</a></button>
                    </div>
				</div>
			</div>
        </main>
    </body>
</html>
