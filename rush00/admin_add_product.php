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
            <div id="add-box">
                <div class="content">
                    <h2 class="login-title">Add Product</h2>
                    <div>
		                <form action="admin_add_product.inc.php" method="post">
							<?php
								if ($_GET["error"] == "oeu") {
									echo "<p style='text-align:center;color:red;'>An unknown error has occured...</p>";
								}
								if ($_GET["error"] == "flb") {
									echo "<p style='text-align:center;color:red;'>Please fill in all fields!</p>";
								}
							?>
		                    <input type="text" name="name" placeholder="Name...">
							<input type="text" name="category" placeholder="Category...">
							<input type="text" name="type" placeholder="Type...">
		                    <input type="text" name="image" placeholder="Image Source...">
		                    <input type="text" name="description" placeholder="Description...">
							<input type="text" name="price" placeholder="Price...">
		                    <button type="submit" name="signup-submit">Submit</button>
		                </form>
					</div>
				</div>
        	</div>
        </main>
    </body>
</html>
