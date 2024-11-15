<?php
if (isset($_GET['color'])) {
    // Set the cookie when a color is selected
    setcookie("bgcolor", $_GET['color'], time() + (7 * 24 * 60 * 60), "/");  // Expire in 7 days
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect to reload the page to apply the new background color
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color with Cookie</title>
</head>
<body style="background-color: <?php echo isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white'; ?>;">
    <a href="?color=lightblue">Light Blue</a> |
</body>
</html>

