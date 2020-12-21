<?php
  session_start();
  include_once("../controller/xyli.php");
  if($_GET['id']){
    $id=$_GET['id'];
   
    $service = new Service();
    $conn=$service->connect();
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $key = array_search($id, $cart);
    
        if ($key !== false) {
        unset($cart[$key]);
        $_SESSION['cart']= $cart;
     }

    //  header("Location : ../cart.php");
    }
  }
 

?>