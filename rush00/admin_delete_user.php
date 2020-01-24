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
            <div id="profile-box">
                <div class="content">
                    <h2 class="login-title">Delete User</h2>
                    <div>
                        <form action="admin_delete_user.inc.php" method="post">
							<?php
								if ($_GET['user'] == "notfound") {
									echo "<p class='error'>User not found!</p>";
								}
							?>
                            <input type="text" name="login" placeholder="Username..."><br>
                            <button type="submit" name="login-submit">delete</button>
                        </form>
                    </div>
				</div>
			</div>
        </main>
    </body>
</html>
