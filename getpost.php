<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method=get>

<input type="hidden" name="name" value="Thula">
<input type="text" name="userinput">
<input type="submit" name="submit" value="click here">


</form>




    <?php
echo $_GET['userinput'];


//get method eken usergen input ekaka gaththoth eka url eke pennanawa 
//post method eken gaththoth url eke pennanne na (password wage dewal gaddi aniwaren post method eken ganna one)
//get post method dekama use karanne user input ganna 



?>
</body>
</html>