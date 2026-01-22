<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="session2.php">page 2</li>




    </ul>

<?php
//session ekak wada karannanam session ekak open karala thiyenna one

$_SESSION['username']="hsjhdjhsd";
echo $_SESSION['username'];

if(isset($_SESSION['username'])){
    echo "not logged in";
}else{
    echo"logged";
}

?>



</body>
</html>