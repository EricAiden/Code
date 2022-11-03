@extends('admin.back.master')
@section('content')
{{-- <h5 style="font-weight: bold">Sửa Danh Mục Sản Phẩm</h5> --}}
<div class="container">
    <div class="row">
        @include('admin.back.statistical')
        <div class="col-sm-10">
                <form action="{{ route('admincat.update',$danhmuc->iddm) }}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="categoryname" style="font-weight: bold">Tên Danh Mục:</label>
                    <input type="text" name="tendm" id="tendm" class="form-control mt-2" value={{ $danhmuc->tendm }}>
                  </div>
                  <div class="form-group mt-2">
                    <input class="btn btn-info btn-sm" type="submit" value="Lưu">
                  </div>
                </form>
        </div>
    </div>
</div>
@endsection