<?php
include('config.php');
$query= $conn->prepare("SELECT*FROM user WHERE email = ?");
$query->execute([$_POST['email']]);
$user=$query->fetch();
if ($user &&($_POST['password']==$user['password']))

{session_start();
    $_SESSION['username']=$user['username'];
    $_SESSION['email']=$user['email'];
    header("Location:index.html");
}else{
    echo " Invalide";
}
//require('config.php');
?>