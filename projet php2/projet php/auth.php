<?php
include('config.php');
$query= $conn->prepare("SELECT*FROM user WHERE email = ?");
$query->execute([$_POST['email']]);
$user=$query->fetch();
if ($user &&($_POST['password']=$user['password']))
{
    echo " Validé";
}else{
    echo " Invalide";
}
//require('config.php');
?>