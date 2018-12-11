@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số chuẩn hóa</h2>
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
                <label for="KhoiLuongSua"><b>Khối lượng sữa:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="KhoiLuongSua" name="KhoiLuongSua" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="KhoiLuongSua" name="KhoiLuongSua" required value="{{ $data->KhoiLuongSua }}">
                @else
                <input type="number" class="form-control" id="KhoiLuongSua" name="KhoiLuongSua" required  value="{{ $data->KhoiLuongSua }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="KhoiLuongCream"><b>Khối lượng cream:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="KhoiLuongCream" name="KhoiLuongCream" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="KhoiLuongCream" name="KhoiLuongCream" required value="{{ $data->KhoiLuongCream }}">
                @else
                <input type="number" class="form-control" id="KhoiLuongCream" name="KhoiLuongCream" required value="{{ $data->KhoiLuongCream }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="KhoiLuongSuaCanSx"><b>Khối lượng sữa cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="KhoiLuongSuaCanSx" name="KhoiLuongSuaCanSx" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="KhoiLuongSuaCanSx" name="KhoiLuongSuaCanSx" required value="{{ $data->KhoiLuongSuaCanSx }}">
                @else
                <input type="number" class="form-control" id="KhoiLuongSuaCanSx" name="KhoiLuongSuaCanSx" required value="{{ $data->KhoiLuongSuaCanSx }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="KhoiLuongCreamCanSx"><b>Lượng cream cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="KhoiLuongCreamCanSx" name="KhoiLuongCreamCanSx" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="KhoiLuongCreamCanSx" name="KhoiLuongCreamCanSx" required value="{{ $data->KhoiLuongCreamCanSx }}">
                @else
                <input type="number" class="form-control" id="KhoiLuongCreamCanSx" name="KhoiLuongCreamCanSx" required value="{{ $data->KhoiLuongCreamCanSx }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="LuongChatBeoBoSung"><b>Lượng chất béo cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="LuongChatBeoBoSung" name="LuongChatBeoBoSung" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="LuongChatBeoBoSung" name="LuongChatBeoBoSung" required value="{{ $data->LuongChatBeoBoSung }}">
                @else
                <input type="number" class="form-control" id="LuongChatBeoBoSung" name="LuongChatBeoBoSung" required value="{{ $data->LuongChatBeoBoSung }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="LuongSuaGayBoSung"><b>Lượng sữa gầy cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="number" class="form-control" id="skimMilk" name="LuongSuaGayBoSung" required>
                @elseif($role == 'admin')
                <input type="number" class="form-control" id="skimMilk" name="LuongSuaGayBoSung" required value="{{ $data->LuongSuaGayBoSung }}">
                @else
                <input type="number" class="form-control" id="skimMilk" name="LuongSuaGayBoSung" required value="{{ $data->LuongSuaGayBoSung }}" disabled>
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
