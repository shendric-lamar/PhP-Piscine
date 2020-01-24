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
            <div id="sign-up-box">
                <div class="content">
                    <h2 class="login-title">Add User</h2>
                    <div>
		                <form action="create.inc.php?admin=yes" method="post">
							<?php
								if ($_GET["error"] == "pdm") {
									echo "<p style='text-align:center;color:red;'>Passwords don't match!</p>";
								}
								if ($_GET["error"] == "uae") {
									echo "<p style='text-align:center;color:red;'>User already exists!</p>";
								}
								if ($_GET["error"] == "flb") {
									echo "<p style='text-align:center;color:red;'>Please fill in all fields!</p>";
								}
							?>
		                    <input type="text" name="login" placeholder="Username...">
		                    <input type="password" name="passwd" placeholder="Password...">
		                    <input type="password" name="passwd-repeat" placeholder="Repeat password...">
		                    <button type="submit" name="signup-submit">Create</button>
		                </form>
					</div>
				</div>
        	</div>
        </main>
    </body>
</html>
