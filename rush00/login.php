<?php
	require ("header.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
            <div id="login-box">
                <div class="content">
                    <h2 class="login-title">Log In</h2>
                    <div>
                        <form action="login.inc.php<?= ($_GET['error'] == "validate-account") ? '?msg=rename-basket' : ''; ?>" method="post">
							<?php
								if ($_GET['error'] == "validate-account") {
									echo "<p style='text-align:center;color:red;'>Log in before validating order!</p>";
								}
								if ($GET["acc"] == "0")
									echo "<p style='text-align:center;color:red;'>Account deleted!</p>";
								if ($_GET["error"] == "unf")
									echo "<p style='text-align:center;color:red;'>Wrong username/password!</p>";
							?>
                            <input type="text" name="login" placeholder="Username..."><br>
                            <input type="password" name="passwd" placeholder="Password..."><br>
                            <button type="submit" name="login-submit">login</button>
                        </form>
						<button type="submit" class="sign-up"><a class="link" href="create.php">sign up</a></button>
                    </div>
				</div>
			</div>
        </main>
    </body>
</html>
