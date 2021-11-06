<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ajax example</h1>
    <button onclick="callAjax();">Call AJAX</button>
    <div id="demo"></div>
    <script>
        function callAjax() {
            var ajax = new XMLHttpRequest();
            ajax.open("GET", "ajax.php");
            ajax.send();
            ajax.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        }
    </script>
</body>

</html>