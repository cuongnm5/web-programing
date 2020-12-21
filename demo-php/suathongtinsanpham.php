<?php 
session_start();
include_once("controller/xyli.php");
$service = new Service();
$conn =  $service->connect();
if(isset($_GET['id'])){
  $id = $_GET['id'];
  
  $sql = " select * from product where id='$id' ";
  $kq = mysqli_query($conn,$sql);
  $info = mysqli_fetch_assoc($kq);
  //
   if(isset($_POST['capnhat'])){
    $ten = $_POST['ten'];
    $gia = $_POST['gia'];
    $des = $_POST['des'];
    $pass = $_POST['pass'];
   
    $anh = $anh = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
  
    if(isset($ten)&&$anh!=""&&isset($gia)&&isset($des)){
          
          $query = "
          update product set name='$ten',price='$gia',imagePath='$anh',des='$des' where id='$id'; ";
          $result = mysqli_query($conn,$query);
          if($result){
            header("Location: quanlisanpham.php");
          }else{
            echo "
            <center class='alert alert-warning text-center'>
            <strong>cập nhật thất bai !</strong> 
            </center>
                 ";
          
        }
    }else{
      $query = "
      update product set name='$ten',price='$gia',des='$des' where id='$id'; ";
      $result = mysqli_query($conn,$query);
      if($result){
        header("Location: quanlisanpham.php");
      }else{
        echo "
        <center class='alert alert-warning text-center'>
        <strong>cập nhật thất bai !</strong> 
        </center>
             ";
      
    }
    }
   
   }
    

}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:03:18 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Legoo</title>
  <!-- Iconic Fonts -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.php">
        <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="logo" style="max-width: 95px;">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"><span><i class="fa fa-archive fs-16"></i>Quản lí sản phẩm</span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="quanlisanpham.php">Danh sách sản phẩm</a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#thongke" aria-expanded="false" aria-controls="product"> <span><i class="fas fa-clipboard-list fs-16"></i>Quản lý đơn hàng</span>
        </a>
        <ul id="thongke" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li> <a href="quanlihoadon.php">Danh sách đơn hàng</a>
          </li>
          
        
        </ul>
      </li>
      <!-- product end -->
      <!-- orders -->
    
      <!-- orders end -->
      <!-- restaurants -->
  
 

    </ul>
  </aside>
  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a>
        </li>
        <li>
          <button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span>
          </button>
        </li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
       
        </div>
      </div>
    </div>
  </aside>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets/img/costic/costic-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">


<li class="ms-nav-item ms-nav-user dropdown">
<a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="ms-user-img ms-img-round float-right" src="img/1.jpeg" alt="people">
</a>
<ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
<li class="dropdown-menu-header">
<?php if(isset($_SESSION['username'])){  ?>
  <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Xin chào ,  <?php echo $_SESSION['username']  ?></span></h6>
 <?php } ?>

</li>
<li class="dropdown-menu-footer">
       <a class="media fs-14 p-2" href="../../../indexUser.php"> <span><i class="fas fa-arrow-alt-circle-right mr-2" style="font-size: 19px;"></i> Đi đến trang User</span>
       </a>
     </li>
<li class="dropdown-menu-footer">
<a class="media fs-14 p-2" href="../../logout.php"> <span><i class="flaticon-shut-down mr-2"></i>Đăng xuất</span>
 </a>
</li>
</ul>
</li>
</ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
    </nav>
    <div class="content-wrapper" style="background: white; min-height: 121px;">
 
    <div class="body">
            

            <div class="container" style="width: 1500px;height: 650px;">
          

                <div class="row">
                    <div class="col col-sm-6" style="    margin-left: 24%;">
                       
  <form  method="post"  enctype="multipart/form-data" class="form-signup">
 
 <h6> Tên sản phẩm</h6>
 <input type="text" id="ten" class="form-control" value="<?php echo $info['name']  ?>" name="ten" required="" autofocus="">
 <h6> Giá</h6>
 <input type="text" id="email" class="form-control" value="<?php echo $info['price']  ?>" name="gia" >
 <h6>Miêu tả</h6>
 <textarea cols="5" rows="5"  class="form-control"  name="des" > <?php echo $info['des']  ?></textarea>

 <h6>Ảnh sản phẩm </h6>
 <img src="img/<?php echo $info['imagePath']  ?>" style="max-width: 80px; max-height: 60px;">
 <input type="file" id="image" class="form-control" name="image" placeholder="image" >

 <button class="btn btn-primary btn-block" type="submit" name="capnhat" style="margin-top:15px;width: 30%;">cập nhật</button>
 
 
</form>
    
                  </div>
        
            </div>

 

    </div>
</div>

                </div>
            </div>
  </main>
  <!-- MODALS -->
  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

  
  </aside>
  <!-- Reminder Modal -->
  
  <!-- Notes Modal -->
  
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js">
  </script>
  <script src="assets/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->

  <script src="assets/js/Chart.bundle.min.js">
  </script>
  <script src="assets/js/widgets.js"> </script>
  <script src="assets/js/clients.js"> </script>
  <script src="assets/js/Chart.Financial.js"> </script>
  <script src="assets/js/d3.v3.min.js">
  </script>
  <script src="assets/js/topojson.v1.min.js">
  </script>
  <script src="assets/js/datatables.min.js">
  </script>
  <script src="assets/js/data-tables.js">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:05:48 GMT -->
</html>
