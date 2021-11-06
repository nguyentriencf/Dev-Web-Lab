<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        const showHint = (str) => {
                if (str.length == 0) {
                    document.getElementById('txtHint').innerHTML = "";
                } else {
                    var ajax = new XMLHttpRequest();
                    ajax.onreadystatechange = () => {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                            console.log(this.responseText);
                        }
                    }
                    ajax.open("GET", "gethint.php?q=" + str, true); 
                    ajax.send();
                    };
                }
    </script>
    <p><b>start typing a name in the input field below:</b></p>
    <form action="">
        <label for="fname">FirstName</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id='txtHint'></span></p>
</body>

</html>