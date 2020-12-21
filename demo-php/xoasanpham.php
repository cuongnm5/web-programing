<?php 
 include_once("controller/xyli.php");
 $service = new Service();
 $conn =  $service->connect();
  if(isset($_GET['id'])){
      $id = $_GET['id'];
      echo $id;
      $sql= "delete from product  where id=".$id;
      $kq = mysqli_query($conn,$sql);
      if($kq) header("Location: quanlisanpham.php");
  }
?>