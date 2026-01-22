<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
//cookies = monawa hari data tikak userge account eke store karala thiya ganna use karanawa 
//sesion = browser ekak open wela thiyanakan userge data tika store karla thiya ganna use karanawa
//web browser eka open wela thiyanakan witharai session wala data thiyenne
//password wage dewal store karanne session wala 

$username="Thula";
setcookie('name',"Thula",time()+300) //meka automatically sec walin delete wenwa sec 300kin

$_SESSION['namee']="Thula";







?>

</body>
</html>