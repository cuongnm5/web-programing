
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Legoo</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/core.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/core.js"></script>
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
            }
            else{
              echo"<a class=\"nav-link\" onclick=\"login()\"> Đăng nhập </a>";
            }
            ?>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
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