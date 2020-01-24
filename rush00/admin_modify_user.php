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
                    <div>
						<button type="submit" class="sign-up"><a class="link" href="admin_delete_user.php">delete user</a></button>
						<button type="submit" class="sign-up"><a class="link" href="admin_add_user.php">add user</a></button>
						<button type="submit" class="sign-up"><a class="link" href="admin_change_user.php">change username/password</a></button>
                    </div>
				</div>
			</div>
        </main>
    </body>
</html>
