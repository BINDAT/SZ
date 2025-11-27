<?php
require('config.php');
$query= $conn->prepare("SELECT*FROM user WHERE USERNAME = ?");
$query->execute([$_POST["USERNAME"]]);
$user=$query->fetch();
if ($user &&($_POST['PASSWORD']==$user['PASSWORD']))

{session_start();
    $_SESSION['USERNAME']=$user['USERNAME'];
    $_SESSION['EMAIL']=$user['EMAIL'];
    $_SESSION['Avatar']=$user['Avatar'];
    $_SESSION['c_date']=$user['c_date'];
    header("Location:index.html");
}else{
    echo " Invalide";
}
/*Code focntionel maintenant*/
?>
