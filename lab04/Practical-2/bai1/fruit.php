<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Đình Phát Triển</title>
</head>
<body>
    <?php
    class fruit{
        public $name;
        public $color;
        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
            
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
    }
    class Strawbery extends fruit{
        public function message(){
            echo "Am i a fruit or berry? ";
        }
    }
    $strawBerry = new Strawbery("nho",'red');
    $strawBerry->message();
    $strawBerry->intro();
    ?>
</body>
</html>