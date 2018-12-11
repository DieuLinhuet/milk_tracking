<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="#">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main class="py-4">
          <div class="container">
              <div class="row justify-content-center">
                <img src="/images/sua-vinamilk-header.jpg" alt="header">
                <h1>Thông tin sữa tại nhà máy</h1>
                <div class="col-sm-10 row">
                  <div class="col-sm-6">
                    <h3>Kết quả kiểm tra ban đầu:</h3>
                    <ul>
                      <li>Hàm lượng chất béo: {{ $sample->ThongSoLayMau->HamLuongChatBeo }}%</li>
                      <li>Hàm lượng protein: {{ $sample->ThongSoLayMau->HamLuongProtein }}%</li>
                      <li>Nhiệt độ đóng băng: {{ $sample->ThongSoLayMau->NhietDoDongBang }}%</li>
                      <li>Lượng chất khô: {{ $sample->ThongSoLayMau->LuongChatKho }}%</li>
                      <li>Tỷ trọng: {{ $sample->ThongSoLayMau->TyTrong }}g/ml</li>
                    </ul>
                    <br>
                    <h3>Kết quả giai đoạn chuẩn hóa:</h3>
                    <ul>
                      <li>Khối lượng sữa: {{ $sample->ThongSoChuanHoa->KhoiLuongSua }}kg</li>
                      <li>Khối lượng cream: {{ $sample->ThongSoChuanHoa->KhoiLuongCream }}kg</li>
                      <li>Khối lượng sữa cần sản xuất: {{ $sample->ThongSoChuanHoa->KhoiLuongSuaCanSx }}kg</li>
                      <li>Lượng cream cần sản xuất: {{ $sample->ThongSoChuanHoa->KhoiLuongCreamCanSx }}kg</li>
                      <li>Lượng chất béo cần bổ sung: {{ $sample->ThongSoChuanHoa->LuongChatBeoBoSung }}kg</li>
                      <li>Lượng sữa gầy cần bổ sung: {{ $sample->ThongSoChuanHoa->LuongSuaGayBoSung }}kg</li>
                    </ul>
                    <br>
                    <h3>Kết quả giai đoạn đồng hóa:</h3>
                    <ul>
                      <li>Nhiệt độ đồng hóa: {{ $sample->ThongSoDongHoa->NhietDo }}<sup>o</sup>C</li>
                      <li>Áp suất đồng hóa: {{ $sample->ThongSoDongHoa->ApSuat }}bar</li>
                      <li>Chất nhũ hóa được sử dụng: {{ $sample->ThongSoDongHoa->ChatNhuHoa }}</li>
                      <li>Hàm lượng casein: {{ $sample->ThongSoDongHoa->HamLuongCasein }}%</li>
                      <li>Kích thước hạt kem: {{ $sample->ThongSoDongHoa->KichThuocHatKem }}&micro;m</li>
                      <li>Thời gian ly tâm: {{ $sample->ThongSoDongHoa->ThoiGianLytam }}ph</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <h3>Kết quả giai đoạn thanh trùng:</h3>
                    <ul>
                      <li>Tổng hàm lượng chất khô: {{ $sample->ThongSoThanhTrung->TongHamLuongChatKho }}%</li>
                      <li>Hàm lượng béo: {{ $sample->ThongSoThanhTrung->HamLuongBeo }}%</li>
                      <li>Hàm lượng protein: {{ $sample->ThongSoThanhTrung->HamLuongBeo }}%</li>
                      <li>Mẫu thử phosphatase: {{ $sample->ThongSoThanhTrung->MauThuPhosphatase }}</li>
                      <li>Coliform: {{ $sample->ThongSoThanhTrung->Coliform }}%</li>
                      <li>Salmonella: {{ $sample->ThongSoThanhTrung->Salmonella }}%</li>
                    </ul>
                    <br>
                    <h3>Kết quả giai đoạn cô đặc làm nguội:</h3>
                    <ul>
                      <li>Nhiệt độ làm lạnh: {{ $sample->ThongSoCoDac->NhietDoLamLanh }}<sup>o</sup>C</li>
                      <li>Thời gian làm lạnh: {{ $sample->ThongSoCoDac->ThoiGianLamLanh }}ph</li>
                      <li>Tỷ lệ mầm lactose: {{ $sample->ThongSoCoDac->Lactose }}%</li>
                      <li>Nồng độ chất béo: {{ $sample->ThongSoCoDac->NongDoChatBeo }}%</li>
                      <li>Nồng độ chất khô: {{ $sample->ThongSoCoDac->NongDoChatKho }}%</li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </main>
    </div>
</body>
</html>
