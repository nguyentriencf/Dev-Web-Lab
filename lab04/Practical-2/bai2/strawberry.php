<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class strawberry</title>
</head>
<body>
    <?php
    include 'fruit.php';
    class strawberry extends fruit{
        public function message(){
            echo "Am I fruit or berry";
        }
    }
    ?>
</body>
</html>