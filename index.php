<?php
if (isset($_POST['choice'])) {
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="POST">
   <h3>Une autre carte?</h3>
    <input type="radio" name="choice" value="yes" checked="checked">oui<br>
    <input type="radio" name="choice" value="no">non<br><br>
    <input type="submit" value="ok">
</form>

<?php
require_once "game.php";
?>

</body>
</html>