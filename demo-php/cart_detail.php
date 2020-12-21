<?php

use function Composer\Autoload\includeFile;

session_start();
include_once("controller/xyli.php");
$service = new Service();
$conn = $service->connect();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $countCart = array_count_values($cart);
}
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $sql = "select b.id , p.name , p.price , p.imagePath ,c.amout , b.status ,b.time
    from cart as c,bill as b, product as p
    where c.tblBillid = b.id and c.tblProductid = p.id and c.tblUserid = $id";
    $query = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Legoo</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/core.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <img class="d-block img-fluid" style="width: 60px; height: 60px;" src="img/lego.gif" alt="First slide">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" onclick="home()">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="cart ()">Giỏ hàng</a>
                    </li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-facebook"></i></a></li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-github"></i></a></li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-google-plus"></i></a></li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-youtube"></i></a></li>
                    <li><a target="_blank" href="#"><i class="icon fab fa-linkedin"></i></a></li>
                    <li class="nav-item active">
                        <?php
                        if ($_SESSION['isDangNhap'] == 1) {
                            echo "<a class=\"nav-link\" onclick=\"logout()\"> Logout </a>";
                        } else {
                            echo "<a class=\"nav-link\" onclick=\"login()\"> Đăng nhập </a>";
                        }
                        ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

        <div class="row row-profile">
            <div class="col-lg-3 ">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic" style="margin-left: 32%;">
                        <img src="img/cat.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Mạnh Cường
                        </div>
                        <div class="profile-usertitle-job">
                            Developer
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm">Sửa thông tin</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->

                </div>
            </div>

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

                <nav style="margin-top: 5%;">
                    <div class="nav nav-tabs nav-fill" role="tablist">
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-all" role="tab">Danh sách sản phẩm đã chọn</a>

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane show active" id="nav-all" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table table-hover thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">ID đơn hàng</th>

                                    <th scope="col">Tên sản phẩm </th>
                                    <th scope="col">Số lượng mua</th>
                                    <th scope="col">Giá</th>

                                    <th scope="col">Trạng thái đơn hàng</th>
                                    <th scope="col">Thời gian mua hàng </th>
                                    <th scope="col">Ảnh </th>

                                </tr>
                            </thead>
                            <tbody class="bangchon">
                                <?php
                                if (isset($id)) {
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>
                                        <tr>
                                            <th scope="row"> <?php echo $row['id']; ?></th>

                                            <th scope="row"> <?php echo $row['name']; ?> sản phẩm</th>
                                            <th scope="row"> <?php echo $row['amout']; ?></th>
                                            <th scope="row"> <?php echo $row['price']; ?></th>

                                            <?php
                                            if ($row['status'] == 1) {
                                                echo '<td><i class="text-success fa fa-circle"></i></td>';
                                            } else {
                                                echo '<td><i class="text-danger fa fa-circle"></i></td>';
                                            }
                                            ?>
                                            <th scope="row"> <?php echo $row['time']; ?></th>
                                            <th scope="row"><img src="img/<?php echo $row['imagePath'] ?>" style="    max-width: 50px;"></th>
                                            

                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                        <div style="text-align: center;">
              <button class="btn btn-success btn-sm" onclick="cart()">Quay lại</button>
            </div>
                    </div>
                </div>
                <!-- <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">

          </div>

        </div> -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Legoo</h6>
                    <p>Chuyên cung cấp các loại đồ chơi lắp ráp giá tốt nhất thị trường. Cam kết hàng chính hãng từ Thụy Điển,
                        mang lại cho bạn cảm xúc thời niên thiếu.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Các sản phẩm</h6>
                    <p>
                        <a href="#!">Lego robot</a>
                    </p>
                    <p>
                        <a href="#!">Lego nội thất</a>
                    </p>
                    <p>
                        <a href="#!">Lego limited</a>
                    </p>
                    <p>
                        <a href="#!">Lego trẻ em</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-2 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Tham khảo</h6>
                    <p>
                        <a href="#!">Tài khoản của bạn</a>
                    </p>
                    <p>
                        <a href="#!">Trở thành nhà cung cấp</a>
                    </p>
                    <p>
                        <a href="#!">Đánh giá vận chuyển</a>
                    </p>
                    <p>
                        <a href="#!">Giúp đỡ</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Liên lạc</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr>

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2020 Copyright:
                        <a href="fb.com/gom.nguyen.5">
                            <strong> Đô Đô</strong>
                        </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/core.js"></script>
    <script>
        function logout() {
            location.replace("login.php")

        }

        function login() {
            location.replace("login.php")
        }

        function home() {
            location.replace("index.php")
        }

        function cart() {
            location.replace("cart.php")
        }
    </script>
</body>

</html>