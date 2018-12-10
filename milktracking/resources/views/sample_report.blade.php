@extends('layouts.app')

@section('css')
<style>
h1{
  text-align: center;
  margin: 20px;
  font-weight: bold;
}
.container{
  background-color: white;
}
img{
  width: 100%;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <img src="/images/sua-vinamilk-header.jpg" alt="header">
      <h1>Thông tin sữa tại nhà máy</h1>
      <div class="col-sm-10 row">
        <div class="col-sm-6">
          <h3>Kết quả kiểm tra ban đầu:</h3>
          <ul>
            <li>Hàm lượng chất béo: </li> <!-- truyen gia tri vao li qua bien -->
            <li>Hàm lượng protein: </li>
            <li>Nhiệt độ đóng băng: </li>
            <li>Lượng chất khô: </li>
            <li>Tỷ trọng: </li>
          </ul>
          <br>
          <h3>Kết quả giai đoạn chuẩn hóa:</h3>
          <ul>
            <li>Khối lượng sữa: </li>
            <li>Khối lượng cream: </li>
            <li>Khối lượng sữa cần sản xuất: </li>
            <li>Lượng cream cần sản xuất: </li>
            <li>Lượng chất béo cần bổ sung: </li>
            <li>Lượng sữa gầy cần bổ sung: </li>
          </ul>
          <br>
          <h3>Kết quả giai đoạn đồng hóa:</h3>
          <ul>
            <li>Nhiệt độ đồng hóa: </li>
            <li>Áp suất đồng hóa: </li>
            <li>Chất nhũ hóa được sử dụng: </li>
            <li>Hàm lượng casein: </li>
            <li>Kích thước hạt kem: </li>
            <li>Thời gian ly tâm: </li>
          </ul>
        </div>
        <div class="col-sm-6">
          <h3>Kết quả giai đoạn thanh trùng:</h3>
          <ul>
            <li>Tổng hàm lượng chất khô: </li>
            <li>Hàm lượng béo: </li>
            <li>Hàm lượng protein: </li>
            <li>Mẫu thử phosphatase: </li>
            <li>Coliform: </li>
            <li>Salmonella: </li>
          </ul>
          <br>
          <h3>Kết quả giai đoạn cô đặc làm nguội:</h3>
          <ul>
            <li>Nhiệt độ làm lạnh: </li>
            <li>Thời gian làm lạnh: </li>
            <li>Tỷ lệ mầm lactose: </li>
            <li>Nồng độ chất béo: </li>
            <li>Nồng độ chất khô: </li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection
