<?php 

  include_once("../controller/xyli.php");
  $arrayID = json_decode($_POST["data"]);
  $service = new Service();
  $service->saveAll($arrayID);
  
?>