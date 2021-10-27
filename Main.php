<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'NumRand.php';
        $table = fillCard(26, 10);
        $count = 0;

        for($i = 0; $i < 26; $i++){
            for($ii = 0; $ii < 10; $ii++){
                echo $table[$count];
                if($ii != 9) echo ' | ';
            }
            echo '\n';
        }
    ?>
</body>
</html>