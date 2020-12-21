<?php
  session_start();
  include_once("../controller/xyli.php");
  if($_GET['id']){
    $id=$_GET['id'];
   
    $service = new Service();
    $conn=$service->connect();
    if(!isset($_SESSION['cart'])){
        $cart = array();
        $_SESSION['cart']= $cart;
    }else {
      $cart = $_SESSION['cart'];
      array_push($cart, $id);
      echo count($cart);
      $_SESSION['cart']= $cart;
    }
  }
 

?>