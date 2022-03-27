<?php
session_start(); 
     foreach ($_SESSION["utilisateur"] as $key=>$value)
     echo $key . " " . $value . "<br/>";
     var_dump($_SESSION["utilisateur"]);

?>


<!-- echo $_SESSION['firstname'];
echo $_SESSION['age']; -->
 <!-- print_r($_SESSION["utilisateur"]);

 echo $_SESSION['surname'] . '<br>' . $_SESSION['firstname'] . '<br>' . $_SESSION['age']; -->
