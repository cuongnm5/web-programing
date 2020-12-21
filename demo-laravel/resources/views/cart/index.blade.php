@extends('layout.main')

@section('content')
    <div class="row">
        <h3>Giỏ hàng</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="150px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td>Tổng cộng</td>
                <td>
                    Thuế: {{Cart::tax()}} vnđ<br>
                    Tiền hàng: {{Cart::subtotal()}} vnđ<br>
                    Thành tiền: {{Cart::total()}} vnđ
                </td>
                <td>Số lượng: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="button">Thanh toán</a>
    </div>



@endsection