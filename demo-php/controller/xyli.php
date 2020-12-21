<?php
 
  class Service {

    function Service() {
      
    }

    function connect(){
        $dbhost= "localhost";
        $dbUser = "root" ;
        $dbPass ="root";
        $dbName ="web";
        $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
        if($conn){
          mysqli_query($conn,"SET NAMES 'utf-8'");
          return $conn ;
        }else{
          die("kết nối thất bại".mysqli_connect_error());
        }
        return null;
    }

     function getAllSanPham(){
        $conn = $this->connect();
        $sql = "select * from product ";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }
        return null;
      }

      function checkaddTocart($cart ,$id){
        $dem = 0;
        foreach ($cart as $key => $value) {
          if($value==$id) $dem++;
        }
        if($dem>1) return false ;
        return true ;
      }

      function saveBill(){
        $conn = $this->connect();
        $thoigian = date('Y-m-d');
        $sql = "insert into bill (status,time) VALUES ('0', '$thoigian') ";
       
        $result=mysqli_query($conn,$sql);
        if($result){
          return mysqli_insert_id($conn);
        }
        return null;
      }
      
       function saveAllCart($userid , $idproduct , $idBill,$amout){
        $conn = $this->connect();
        $sql = "insert into cart (tblUserid,tblProductid,tblBillid,amout) VALUES ('$userid', '$idproduct','$idBill','$amout') ";
       
        $result=mysqli_query($conn,$sql);
        if($result){
         echo "insert thành công";
        }
      
       }

      function findSPByID($id){
        $conn = $this->connect();
        $sql = "select * from product where id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array[0] ;
        }
        return null;
      }

      function getStatus($id) {
        $conn = $this->connect();
        $sql = "select status from bill where id = $id";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array[0] ;
        }
        return null;
      }

      function getCartByUser($id){
        $conn = $this->connect();
        $sql = "select b.id , p.name , p.price , p.imagePath ,c.amout , b.status ,b.time
        from cart as c,bill as b, product as p
        where c.tblBillid = b.id and c.tblProductid = p.id and c.tblUserid = $id and b.status = 1";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array[0] ;
        }
        return null;        
      }

      function getallBill(){
        $conn = $this->connect();
        $sql = "select b.id , p.name , p.price , p.imagePath ,c.amout , b.status ,b.time
        from cart as c,bill as b, product as p
        where c.tblBillid = b.id and c.tblProductid = p.id";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }
        return null;
      }
   
      function save($id){
        $conn = $this->connect();
        $sql = "update bill set status=0 where id='$id'";
        mysqli_query($conn,$sql);
      }

     function saveAll($arrayID){
      
         foreach ($arrayID as $value){
            $this->save($value);
           
        }
     }

     
     function saveStatus($id){
      $conn = $this->connect();
      $sql = "update bill set status=1 where id='$id'";
      mysqli_query($conn,$sql);
    }

   function saveAllStatus($arrayID){
    
       foreach ($arrayID as $value){
          $this->saveStatus($value);
         
      }
   }

   
  }

?>