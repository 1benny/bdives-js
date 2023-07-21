<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP!!!!!!!!!!!!!</title>
</head>
<body>
    <?php 

    $i = 1;
    $list = scandir('../');
    do {
        print_r($list[$i]);
        echo '<br>';
        $i++;
    } while ($i <= sizeof($list)-1);

    ?>
</body>
</html>