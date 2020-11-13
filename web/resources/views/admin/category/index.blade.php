@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">Các loại hàng hiện có: </a>
        <ul class="nav navbar-nav">
            @if (!empty($categories))
                @forelse($categories as $category)
                    <li class="active">
                        <a href="{{ route('category.show', $category->id) }}"><strong>{{ $category->name }}</strong></a>
                        {{-- delete button --}}
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        </form>

                    </li>
                @empty
                    <li>Chưa có loại hàng nào</li>
            @endforelse
            @endif

        </ul>



        <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Thêm mới loại hàng</a>
        <div class="modal fade" id="category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm mới</h4>
                    </div>
                    {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('name', 'Title') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                    {!! Form::close() !!}
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    {{--products--}}
    @if (isset($products))

        <h3>Products</h3>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Products</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>no data</td>
                    </tr>
    @endforelse

    </tbody>
    </table>
    @endif

@endsection
