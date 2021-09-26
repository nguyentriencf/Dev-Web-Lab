<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo input</title>
</head>

<body>
    <body>
        Information:
        <?php
        echo "Fullname: " . $_GET["username"] . "<br/>";
        echo "Password:" . $_GET["pass"] . "<br/>";
        echo "Gender:" . $_GET["gender"] . "<br/>";
        echo "Branch:" . $_GET["branch"] . "<br/>";
        ?>
    </body>

</html>