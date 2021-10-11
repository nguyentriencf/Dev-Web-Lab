<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class fruit</title>
</head>
<body>
    <?php 
    class fruit{
        public $name;
        public $color;
        public function __construct($name,$color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "the fruit is {$this->name} and color is {$this->color}";
        }
    }
    
    ?>
</body>
</html>