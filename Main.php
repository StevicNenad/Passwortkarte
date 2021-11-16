<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwortkarte</title>
</head>
<body>
    <?php
        include 'CharFill.php';

        drawAndFillTable($_POST['row'], $_POST['column']);
        echo "<button onClick=\"window.print()\">Print this page</button>"
    ?>
</body>
</html>