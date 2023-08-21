<?php
include('config.php');
$query= $conn->prepare("SELECT*FROM user WHERE Mail = ?");
$query->execute([$_POST['Mail']]);
$user=$query->fetch();
if ($user &&($_POST['MDP']==$user['MDP']))

{session_start();
    $_SESSION['Pseudo']=$user['Pseudo'];
    $_SESSION['Mail']=$user['Mail'];
    header("Location:index.html");
}else{
    echo " Invalide";
}
//require('config.php');
?>