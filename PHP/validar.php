<?php
$error;
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  if($nickname == "usuario" && $password == "123"){
    // $error = "OK";
    header("location:index1.html");

  }else{
    $error = "INCORRECTO";
    echo "Usuario o contraseña incorrectos";
  }

}else{
    $error = "VACIO";
    echo "Los campos estan vacios";
}