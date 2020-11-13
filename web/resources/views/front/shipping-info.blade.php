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
                    <img class="d-block img-fluid" style="width: 50px; height: 50px;" src="https://www.lego.com/cdn/cs/set/assets/blt445eec351be85ac6/Lego-logo.jpg?format=jpg&quality=80&height=55&dpr=1"
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
    <div class="row">
        <div class="small-6 small-centered columns">
            <h3>Địa chỉ nhận hàng</h3>

            {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('addressline', 'Đường') }}
                {{ Form::text('addressline', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('city', 'Thành phố') }}
                {{ Form::text('city', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('state', 'Quận/Huyện') }}
                {{ Form::text('state', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('zip', 'Zip') }}
                {{ Form::text('zip', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('country', 'Quốc gia') }}
                {{ Form::text('country', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone', 'Số điện thoại') }}
                {{ Form::text('phone', null, ['class' => 'form-control']) }}
            </div>

            {{ Form::submit('Thanh toán', ['class' => 'button success']) }}
            {!! Form::close() !!}
        </div>


    </div>
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
