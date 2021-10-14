<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen Dinh Phat Trien</title>
</head>
<body>
    <?php 
    include 'animal.php';
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();

    $animals = [$cat,$dog,$mouse];
    foreach($animals as $animal){
        $animal->makeSounds();
    }
    ?>
</body>
</html>