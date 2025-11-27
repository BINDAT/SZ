<?php
//echo'<script> alert("êtes vous sur de supprimer votre compte");</script>';
echo'<script> var val = confirm("Is that really what you want ?");</script>'; 
if($val ==true ){
  session_start();
  try {
    include('config.php');
    $test=$_SESSION['email'];
    $sql="DELETE FROM user WHERE EMAIL='$test' PASSWORD='$test'";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully".$test.$sql;
  } catch(PDOException $e) {
    header("location:index.html");
    echo $sql . "<br>" . $e->getMessage();
    
  }
}else{
  echo "Nothing change".$test.$sql;
};
/*if (confirm("Press a button!") == true) {
  text = "You pressed OK!";
} else {
  text = "You canceled!";
}*/
?>
