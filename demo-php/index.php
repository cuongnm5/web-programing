<?php
session_start();
include('connection.php');
include_once("controller/xyli.php");
$service = new Service();
$dsproduct = $service->getAllSanPham();

if (isset($_POST['dangnhap'])) 
{

     
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    $sql = "select * from user where username = '$username' and password = '$password' ";
	$query = mysqli_query($conn,$sql);
	$num_rows = mysqli_num_rows($query);
	if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
        exit;
	}else{
        $row = mysqli_fetch_array($query);
		$_SESSION['username'] = $username;
		$_SESSION['name'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['image'] = $row['imagePath'];
        $_SESSION['isDangNhap'] = 1;
        // Thực thi hành động sau khi lưu thông tin vào session
        // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
        if($row['name'] == "admin"){
            header('Location: admin.php');
        }else{
            header('Location: index.php');
        }
    }
    
}


include "include/header.php";
?>

<section class="top-discount-area d-md-flex align-items-center">
    <!-- Single Discount Area -->
    <div class="single-discount-area">
        <h3>Giao hàng và trả hàng miễn phí</h3>
        <h4> <button type="button" class="btn btn-default" style="width: 200px; ">Mua ngay</button></h4>
    </div>
    <!-- Single Discount Area -->
    <div class="single-discount-area">
        <h3>Giảm giá 15% cho toàn bộ các mặt hàng</h3>
        <h4>
            <h4> <button type="button" class="btn btn-warning" style="width: 200px; ">Nhận code ngay</button></h4>
        </h4>
    </div>
    <!-- Single Discount Area -->
    <div class="single-discount-area">
        <h3>Giảm giá 25% cho sinh viên Bưu chính</h3>
        <h4> <button type="button" class="btn btn-default" style="width: 200px; ">Nhận code</button></h4>
    </div>
</section>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-3" style="margin-top: 2%;">

            <section class="mb-4">
                <div class="md-form md-outline mt-0 d-flex justify-content-between align-items-center">
                    <input type="text" id="search12" class="form-control mb-0" placeholder="Search...">
                    <a href="#!" class="btn btn-flat btn-md px-3 waves-effect"><i class="fas fa-search fa-lg"></i></a>
                </div>
            </section>

            <div class="card">
                <article class="card-group-item">

                    <header class="card-header">
                        <h6 class="title">Lọc theo giá</h6>
                    </header>

                    <div class="filter-content">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Min</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="₫0">
                                </div>
                                <div class="form-group col-md-6 text-right">
                                    <label>Max</label>
                                    <input type="number" class="form-control" placeholder="₫1.000">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="card-group-item">
                    <header class="card-header">
                        <h6 class="title">Thể loại</h6>
                    </header>
                    <div class="filter-content">
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">52</span>
                                <input type="checkbox" class="custom-control-input" id="Check1">
                                <label class="custom-control-label" for="Check1">Robot</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">132</span>
                                <input type="checkbox" class="custom-control-input" id="Check2">
                                <label class="custom-control-label" for="Check2">Xe đua</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">17</span>
                                <input type="checkbox" class="custom-control-input" id="Check3">
                                <label class="custom-control-label" for="Check3">Litmited</label>
                            </div> <!-- form-check.// -->

                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">7</span>
                                <input type="checkbox" class="custom-control-input" id="Check4">
                                <label class="custom-control-label" for="Check4">Loại khác</label>
                            </div> <!-- form-check.// -->
                        </div> <!-- card-body.// -->
                    </div>
                </article> <!-- card-group-item.// -->
            </div> <!-- card.// -->

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" style="width: 100%; height: 300px;" src="img/4.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" style="width: 100%; height: 300px;" src="img/5.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" style="width: 100%; height: 300px;" src="img/6.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
             <?php 
               foreach ($dsproduct as $key => $value) {
                 $dt = '<div class="col-lg-4 col-md-6 mb-4">
                 <div class="card h-100">
                     <a href="#"><img class="card-img-top" style="width: 100%; height: 200px;" src="img/'.$value['imagePath'].'" alt="Generic placeholder image"></a>
                     <div class="card-body">
                         <h4 class="card-title">
                             <a href="#">'.$value['name'].'</a>
                         </h4>
                         <h5>'.$value['price'].' vnđ</h5>
                         <p class="card-text">'.$value['des'].'
                         </p>
                         <form action="cart.html" method="get">
                             <button type="button" class="btn " style="width: 200px;" id='.$value['id'].' onclick="themvaogiohang(this)">Thêm vào giỏ hàng</button>
                         </form>
                     </div>
                     <div class="card-footer">
                         <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                     </div>
                 </div>
             </div>
';
echo $dt;
               }
             ?>


     

        </div>
        <!-- /.row -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" style="color: #313c79;" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" style="color: #313c79;" href="#">1</a></li>
                <li class="page-item"><a class="page-link" style="color: #313c79;" href="#">2</a></li>
                <li class="page-item"><a class="page-link" style="color: #313c79;" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" style="color: #313c79;" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script>
    function themvaogiohang(e){
      var idsp = $(e).attr("id");
      $.ajax({
           type: 'GET',
           url: 'ajax/themvaogiohang.php?id='+idsp,
           success: function (data) {
             alert("Thêm vào giỏ hàng thành công !");
            
           },error: function () {
                alert("lỗi");
        
              }
          });
    }
</script>
<?php
include "include/footer.php";
?>