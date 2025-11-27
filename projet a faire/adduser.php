<?php
require('config.php');
$query = $conn->prepare("INSERT INTO user VALUE ('Nom','Prenom','Username','Mail','MDP')");
$query->execute($_POST['Nom']['Prenom']['Username']['Mail']['MDP']);
$user=$query->fetch();
if ($user &&($_POST['Username']==$user['Username'])){
}else{
}elseif{
($user &&($_POST['Mail']==$user['Mail']));

echo" Mail déjà enregistree";
{session_start();
$_SESSION['Username']=$user['Username'];
$_SESSION['Mail']=$user['Mail'];
header("Location:index.html");
}
}



?>