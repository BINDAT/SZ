<?php
include('config.php');
$query= $conn->prepare("SELECT*FROM user WHERE mail = ?");
$query->execute([$_POST['mail']]);
$user=$query->fetch();
if ($user &&($_POST['mdp']==$user['mdp']))

{session_start();
    $_SESSION['pseudo']=$user['pseudo'];
    $_SESSION['mail']=$user['mail'];
    header("Location:index.html");
}else{
    echo " Invalide";
}
//require('config.php');
?>