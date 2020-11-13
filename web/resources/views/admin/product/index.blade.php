@extends('admin.layout.admin')

@section('content')

    <h3>Danh sách sản phẩm</h3>

    <ul class="container">
        @forelse($products as $product)
            <li class="row">

                <div class="col-md-8">
                    <h4>Tên sản phẩm: {{ $product->name }}</h4>
                    {{-- <h4>Phân
                        loại:{{ count($product->category) ? $product->category->name : 'N/A' }}</h4>
                    --}}
                    {{-- @foreach ((array) $product->images as $image) --}}

                        <img src="{{ url('images', $product->image) }}" style="max-width: 200px">

                        {{--
                    @endforeach --}}
                </div>
                <div class="col-md-4">
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm" style="margin-top: 10%">Chỉnh sửa thông
                        tin</a>

                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="margin-top: 5%">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </li>

        @empty

            <h3>Chưa có sản phẩm nào</h3>

        @endforelse
    </ul>


@endsection
