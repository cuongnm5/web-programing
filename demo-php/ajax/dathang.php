<?php
  session_start();
  include_once("../controller/xyli.php");

    $service = new Service();
    $conn=$service->connect();
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['user_id'])){
           $newBill = $service->saveBill();
           $cart = array_count_values($_SESSION['cart']);
           $iduser = $_SESSION['user_id'];
           foreach ($cart as $key => $value) {
             $service->saveAllCart($iduser,$key,$newBill,$value);
           }
        }
       
    }

    unset($_SESSION['cart']);
  
 

?>