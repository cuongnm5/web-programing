@extends('layout.main')

@section('content')

    <section class="hero text-right">
        <br />
        <br />
        <br />
        <br />
        <h2 style="margin-right: 15%">
            <strong>
                Ưu đãi mua 1 tặng 1
            </strong>
        </h2>
        <a href="{{ url('/legos') }}" style="margin-right: 21%"><button class="button large" style="	box-shadow:inset 0px 1px 0px 0px #ffffff;
                    background:linear-gradient(to bottom, #050505 5%, #000000 100%);
                    background-color:#050505;
                    border-radius:6px;
                    border:1px solid #ffffff;
                    display:inline-block;
                    cursor:pointer;
                    color:#ffffff;
                    font-family:Arial;
                    font-size:21px;
                    font-weight:bold;
                    padding:14px 24px;
                    text-decoration:none;
                    text-shadow:0px 1px 0px #000000;
                ">Mua ngay</button></a>

    </section>
    <br />
    <div class="subheader text-center">
        <h2>
            Các sản phẩm nổi bật
        </h2>

    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse ($legos->chunk(4) as $chunk)
            @foreach ($chunk as $lego)

            @endforeach
            <div class="small-3 columns">
                <div class="item-wrapper" style="height: 400px">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart" href="{{ route('cart.edit', $lego->id) }}">
                            Thêm vào giỏ hàng
                        </a>
                        <a src="#">
                            <img src="{{ url('images', $lego->image) }}" style="height: 200px; width=300px;" alt="">
                        </a>
                    </div>
                    <a href="{{ route('lego', $lego->id) }}">
                        <h3>
                            {{ $lego->name }}
                        </h3>
                    </a>
                    <h5>
                        {{ $lego->price }}
                    </h5>
                    <p>
                        {{ $lego->des }}
                    </p>
                </div>
            </div>
        @empty

        @endforelse
    </div>
    <!-- Footer -->
    <br>

@endsection
