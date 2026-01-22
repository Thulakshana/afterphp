<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$x=10;
function name()
{
   echo $GLOBALS['x'];

}

name();

// $_post , $_get ,$_cookie ,$_sesion (supper gloibal variables)


?>
</body>
</html>