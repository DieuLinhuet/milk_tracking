@extends('layouts.app')

@section('css')
<style>
  .table > tbody > tr > td{
    text-align: center;
    vertical-align: middle;
  }
  .table > thead > tr > th{
    text-align: center;
    vertical-align: middle;
  }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <h2 class="col-sm-9">Danh sách mẫu sữa</h2>
                    <a href="#" class="col-sm-3">
                      <input type="button" class="btn btn-primary float-right" name="" value="Thêm mẫu thử mới">
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Ngày nhập</th>
                        <th>Kiểm tra trực quan</th>
                        <th>Thông số lấy mẫu</th>
                        <th>Thông số chuẩn hóa</th>
                        <th>Thông số đồng hóa</th>
                        <th>Thông số thanh trùng</th>
                        <th>Thông số cô đặc làm nguội</th>
                        <th>Tổng số chữ ký</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>111</td>
                        <td>20/02/2018 10:10:00</td>
                        <td>
                          <a href="#">Xem chi tiết</a>
                        </td>
                        <td>
                          <a href="{{ route('sample_test') }}">Cập nhật</a>
                        </td>
                        <td>
                          <a href="{{ route('normalize') }}">Xem chi tiết</a>
                        </td>
                        <td>
                          <a href="{{ route('assimilation') }}">Cập nhật</a>
                        </td>
                        <td>
                          <a href="{{ route('pasteurization') }}">Cập nhật</a>
                        </td>
                        <td>
                          <a href="{{ route('concentrate') }}">Cập nhật</a>
                        </td>
                        <td>0</td>
                        <td>Đã ký</td>
                      </tr>

                      <!-- test -->
                      <tr>
                        <td>112</td>
                        <td>21/02/2018 14:02:00</td>
                        <td>
                          <a href="#">Xem chi tiết</a>
                        </td>
                        <td>
                          <a href="#">Cập nhật</a>
                        </td>
                        <td>
                          <a href="#">Xem chi tiết</a>
                        </td>
                        <td>
                          <a href="#">Cập nhật</a>
                        </td>
                        <td>
                          <a href="#">Cập nhật</a>
                        </td>
                        <td>
                          <a href="#">Cập nhật</a>
                        </td>
                        <td>0</td>
                        <td>Ký</td>
                      </tr>

                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
