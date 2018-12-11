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
              <div class="offset-sm-1 col-sm-3">
                <label for="sampleId"><b>ID:</b></label>
              </div>
              <div class="col-sm-7">
                <h4 id="sampleId">{{$recordId}}</h4>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="lipid"><b>Hàm lượng chất béo:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="lipid" name="lipid" required value="">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="lipid" name="lipid" required value="{{ $data->HamLuongChatBeo }}">
                @else
                <input type="text" class="form-control" id="lipid" name="lipid" required value="{{ $data->HamLuongChatBeo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="protein"><b>Hàm lượng protein:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="protein" name="protein" value="" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="protein" name="protein" value="{{ $data-> HamLuongProtein }}" required>
                @else
                <input type="text" class="form-control" id="protein" name="protein" required value="{{ $data->HamLuongProtein }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="freezingTemperature"><b>Nhiệt độ đóng băng:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="freezingTemperature" name="temperature" required value="">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="freezingTemperature" name="temperature" required value="{{ $data->NhietDoDongBang }}">
                @else
                <input type="text" class="form-control" id="freezingTemperature" name="temperature" required value="{{ $data->NhietDoDongBang }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="dryMatter"><b>Lượng chất khô:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="dryMatter" name="dryMatter" required value="">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="dryMatter" name="dryMatter" required value="{{ $data->LuongChatKho }}">
                @else
                <input type="text" class="form-control" id="dryMatter" name="dryMatter" required value="{{ $data->LuongChatKho }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="proportion"><b>Tỷ trọng:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="proportion" name="proportion" required value="">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="proportion" name="proportion" required value="{{ $data->TyTrong }}">
                @else
                <input type="text" class="form-control" id="proportion" name="proportion" required value="{{ $data->TyTrong }}">
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
              <button type="submit" class="btn btn-primary">Tiếp</button>
            </div>
          </form>

        </div>
    </div>
</div>
@endsection
