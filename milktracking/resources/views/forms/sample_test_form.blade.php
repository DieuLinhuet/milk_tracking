@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số lấy mẫu</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('putRecord',['recordId'=>$recordId, 'phase'=>$phase]) }}">
            @csrf
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="sampleId"><b>ID:</b></label>
              </div>
              <div class="col-sm-6">
                <h4 id="sampleId">{{$recordId}}</h4>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="HamLuongChatBeo"><b>Hàm lượng chất béo (%):</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="HamLuongChatBeo" name="HamLuongChatBeo" required value="">
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="HamLuongChatBeo" name="HamLuongChatBeo" required value="{{ $data->HamLuongChatBeo }}">
                @else
                <input type="number" class="form-control" id="HamLuongChatBeo" name="HamLuongChatBeo" required value="{{ $data->HamLuongChatBeo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="HamLuongProtein"><b>Hàm lượng protein (%):</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="HamLuongProtein" name="HamLuongProtein" value="" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="HamLuongProtein" name="HamLuongProtein" value="{{ $data-> HamLuongProtein }}" required>
                @else
                <input type="number" class="form-control" id="HamLuongProtein" name="HamLuongProtein" required value="{{ $data->HamLuongProtein }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="NhietDoDongBang"><b>Nhiệt độ đóng băng (<sup>o</sup>C):</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="NhietDoDongBang" name="NhietDoDongBang" required value="">
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="NhietDoDongBang" name="NhietDoDongBang" required value="{{ $data->NhietDoDongBang }}">
                @else
                <input type="number" class="form-control" id="NhietDoDongBang" name="NhietDoDongBang" required value="{{ $data->NhietDoDongBang }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="LuongChatKho"><b>Lượng chất khô (%):</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="LuongChatKho" name="LuongChatKho" required value="">
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="LuongChatKho" name="LuongChatKho" required value="{{ $data->LuongChatKho }}">
                @else
                <input type="number" class="form-control" id="LuongChatKho" name="LuongChatKho" required value="{{ $data->LuongChatKho }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="TyTrong"><b>Tỷ trọng (g/ml):</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="TyTrong" name="TyTrong" required value="">
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="TyTrong" name="TyTrong" required value="{{ $data->TyTrong }}">
                @else
                <input type="number" class="form-control" id="TyTrong" name="TyTrong" required value="{{ $data->TyTrong }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="offset-sm-1">
                <label for="proportion"><b>Ghi chú:</b></label>
              </div>
              <div class="offset-sm-1">
                <textarea name="note" rows="3" cols="70"></textarea>
              </div>
            </div>
            <div style="text-align: center;">
              @if($data == null)
                <button type="submit" class="btn btn-primary">Tiếp</button>
              @elseif($sample->isApproved)
                <button type="submit" class="btn btn-primary" disabled>Cập nhật</button>
              @else
                <button type="submit" class="btn btn-primary">Cập nhật</button>
              @endif
            </div>
          </form>

        </div>
    </div>
</div>
@endsection
