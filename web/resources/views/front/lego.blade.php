<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title','Cửa hàng đồ chơi Lego')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('dist/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

</head>

<body>
    <div class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{ route('orihome') }}">
                    <img class="d-block img-fluid" style="width: 50px; height: 50px;"
                        src="https://www.lego.com/cdn/cs/set/assets/blt445eec351be85ac6/Lego-logo.jpg?format=jpg&quality=80&height=55&dpr=1"
                        alt="First slide">
                    Lego Shop
                </a>
            </h4>
        </div>
        <div class="top-bar-right">
            <ol class="menu">
                <li>
                    <a href="{{ route('legos') }}">
                        Sản phẩm khác
                    </a>
                </li>
                <li>
                    <a href="#">
                        Liên hệ
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart.index') }}">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                        </i>
                        Giỏ hàng
                        <span class="alert badge">
                            {{ Cart::count() }}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.index') }}">
                        Đăng nhập
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="{{ url('images', $product->image) }}" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                        <span class="price-tag">{{ $product->price }} vnđ</span> {{ $product->name }}
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <a href="#" class="button  expanded">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">

            <span class="heading">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.1 average based on 254 reviews.</p>
            <hr style="border:3px solid #f1f1f1">

            <div class="row">
                <div class="side">
                    <div>5 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-5"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>150</div>
                </div>
                <div class="side">
                    <div>4 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-4"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>63</div>
                </div>
                <div class="side">
                    <div>3 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-3"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>15</div>
                </div>
                <div class="side">
                    <div>2 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-2"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>6</div>
                </div>
                <div class="side">
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div class="bar-1"></div>
                    </div>
                </div>
                <div class="side right">
                    <div>20</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest SHirts -->

    <style>
        * {
            box-sizing: border-box;
        }


        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            margin-top: 10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {
            width: 60%;
            height: 18px;
            background-color: #4CAF50;
        }

        .bar-4 {
            width: 30%;
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {
            width: 10%;
            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            width: 4%;
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            width: 15%;
            height: 18px;
            background-color: #f44336;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }

            .right {
                display: none;
            }
        }

    </style>
    <footer class="footer">
        <div class="row full-width">
            <div class="small-12 medium-4 large-4 columns">
                <i class="fi-laptop"></i>
                <p>Coded with love by Webdevmatics for educational purpose only</p>
            </div>
            <div class="small-12 medium-4 large-4 columns">
                <i class="fi-html5"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed
                    itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates
                    deserunt!</p>
            </div>

            <div class="small-6 medium-4 large-4 columns">
                <h4>Follow Us</h4>
                <ul class="footer-links">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <ul>
            </div>
        </div>
    </footer>

    <script src="{{ asset('dist/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/app.js') }}"></script>
</body>

</html>
