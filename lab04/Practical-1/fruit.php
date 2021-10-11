<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Đình Phát Trien</title>
</head>
<body>
    <?php
    class Fruit {
        public $color;
        public $name;
        function __construct($name,$color) {
            $this->color = $color;
            $this->name = $name;
        } 
        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }

     $fruit = new Fruit('Apple','red');
    echo $fruit->get_name();
    echo '</br>';
    echo $fruit->get_color();

    ?>
    
</body>
</html>