<?php
    include 'includes/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person1 = new Person("Dávid",28);
        echo $person1->getPerson();
        echo "<br>";
        $house1 = new House("családiház",9000000);
        echo $house1->getHouse();
    ?>
</body>
</html>