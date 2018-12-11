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
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <h2 class="col-sm-9">Danh sách mẫu sữa</h2>
                    <a href="{{route('newRecord')}}" class="col-sm-3">
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
                        <!-- <th>Kiểm tra trực quan</th> -->
                        <th>Thông số lấy mẫu</th>
                        <th>Thông số chuẩn hóa</th>
                        <th>Thông số đồng hóa</th>
                        <th>Thông số thanh trùng</th>
                        <th>Thông số cô đặc làm nguội</th>
                        <th>Tổng số chữ ký</th>
                        <th>Trạng thái QR</th>
                        <th>Chữ ký</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- test -->
                      @foreach($samples as $sample)
                      <tr>
                        <td>
                          {{$sample->_id}}
                        </td>
                        <td>{{ substr($sample->createAt,0,10)}} {{substr($sample->createAt,11,8)}}</td>
<!--                         <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '1']) }}">Xem chi tiết</a>
                        </td> -->
<!--                         <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '1']) }}">
                            @if(is_null($sample->ThongSoLayMau))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td> -->
                        <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '1']) }}">
                          @if(is_null($sample->ThongSoLayMau))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '2']) }}">
                          @if(is_null($sample->ThongSoChuanHoa))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '3' ])}}">
                          @if(is_null($sample->ThongSoDongHoa))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '4' ])}}">
                          @if(is_null($sample->ThongSoThanhTrung))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('putRecord', ['recordId' => $sample->_id, 'phase' => '5']) }}">
                          @if(is_null($sample->ThongSoCoDac))Cập nhật
                            @else Xem chi tiết
                            @endif
                          </a>
                        </td>
                        <td>{{ count($sample->signatures) }}</td>
                        <td>@if(!$sample->isApproved) Chưa được xác nhận
                            @else
                          <a href="{{route('sample_report',['recordId' => $sample->_id])}}">
                           <img src="https://chart.googleapis.com/chart?cht=qr&chs=120x120&chld=|0&chl={{ route('sample_report',['recordId' => $sample->_id]) }}">
                          </a>
                            @endif
                          </td>
                        <td>
                          @if($role == 'admin')
                          <?php $signed = 0 ?>
                          @foreach($sample->signatures as $user)
                            @if($userName == $user->username) Đã ký
                            <?php $signed = 1 ?>
                            @endif
                          @endforeach
                          @if($signed == 0)
                            @if(!is_null($sample->ThongSoLayMau) && !is_null($sample->ThongSoChuanHoa)
                            && !is_null($sample->ThongSoDongHoa) && !is_null($sample->ThongSoThanhTrung)
                            && !is_null($sample->ThongSoCoDac))
                            <a href="{{ route('sign',['recordId'=>$sample->_id]) }}" onClick= "return confirm('Bạn có chắc muốn ký?')"> Ký ngay </a>
                            @else Ký ngay
                            @endif 
                          @endif
                          @else Bạn không đủ quyền
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
