<?php
	require ("header.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="tyle.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
	<body>
        <main>
            <div id="modify-box">
                <div class="content">
                    <h2 class="login-title">Change Password</h2>
                    <div>
		                <form action="modify.inc.php" method="post">
							<?php
								if ($_GET["error"] == "unf") {
									echo "<p style='text-align:center;color:red;'>Wrong username/password!</p>";
								}
								if ($_GET["error"] == "oen") {
									echo "<p style='text-align:center;color:red;'>New password can't be the same as old password!</p>";
								}
								if ($_GET["error"] == "flb") {
									echo "<p style='text-align:center;color:red;'>Please fill in all fields!</p>";
								}
							?>
		                    <input type="text" name="login" placeholder="Username...">
		                    <input type="password" name="oldpwd" placeholder="Old Password...">
		                    <input type="password" name="newpwd" placeholder="New password...">
		                    <button type="submit" name="signup-submit">submit</button>
		                </form>
					</div>
				</div>
        	</div>
        </main>
    </body>
</html>
