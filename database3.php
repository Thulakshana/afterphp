<?php

include_once 'database.php';

$id=$_POST['id'];
$name=$_POST['namee'];
$address=$_POST['address'];
$tel=$_POST['tel'];

$sql="insert into users(id,name,address,tel) values ($id,$name,$address,$tel)";

$result=mysqli_query($connect,$sql);


header("Location:database2.php?signup=success")

?>