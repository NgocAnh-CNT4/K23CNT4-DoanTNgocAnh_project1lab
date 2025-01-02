@extends('layouts.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('dtnaadmins.dtnaloaisanpham.dtnacreatesubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>thêm mới loại sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="dtnaMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="dtnaMaLoai" name="dtnaMaLoai">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="dtnaTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="dtnaTenLoai" name="dtnaTenLoai" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="dtnaTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="dtnaTrangThai1" name="dtnaTrangThai" value="1"
                                  checked />
                                  <label for="	dtnaTrangThai">Hiển Thị</label>
                                    &nbsp;
                                  <input type="radio" id="dtnaTrangThai0" name="dtnaTrangThai" value="0" />   
                                  <label for="dtnaTrangThai0">Khóa</label> 
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Ghi Lại</button>
                        <a href="{{route('dtnaadmins.dtnaloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection