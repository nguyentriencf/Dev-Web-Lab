<?php 
interface animals{
    public function makeSounds();
};
class Dog implements animals{
    function makeSounds()
    {
        echo "Bark </br>";
    }
}
class Cat implements animals{
    function makeSounds()
    {
        echo 'Meow </br>';
    }
}
class Mouse implements animals{
    function makeSounds()
    {
        echo "squeak </br>";
    }
}
?>