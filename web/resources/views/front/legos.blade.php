@extends('layout.main')
@section('title', 'Lego')
@section('content')
    <!doctype html>
    <html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Foundation for Sites
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset('dist/css/foundation.css') }}" />
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    </head>

    <body>

        <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            @forelse ($legos as $lego)
                <div class="small-3 columns">
                    <div class="item-wrapper" style="height: 400px">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart" href="{{ route('cart.edit', $lego->id) }}">
                                Thêm vào giỏ hàng
                            </a>
                            <a src="#">
                                <img src="{{ url('images', $lego->image) }}" style="width: 300px; height:200px;" alt="">
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
                <h3>Không có sản phẩm nào</h3>
            @endforelse
        </div>
    </body>

    </html>
@endsection
