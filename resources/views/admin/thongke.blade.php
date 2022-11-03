@extends('admin.back.master')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.back.statistical')
        <div class="col-sm-8">
            {{-- <h5>Thông kê sản phẩm theo danh mục</h5> --}}
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead class="thead-light">
                    <th class="bg-primary">Tên Danh Mục</th>
                    <th class="bg-primary">Số Lượng</th>
                </thead>
                <tbody>
                    @foreach($quantity as $row)
                    <tr>
                        <td>{{ $row->tendm }}</td>
                        <td>{{ $row->soluong }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>      
        </div>
    </div>
</div>

@endsection