@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số chuẩn hóa</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('putRecord',['recordId'=>$recordId, 'phase'=>$phase]) }}">
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
                <label for="milkWeight"><b>Khối lượng sữa:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="milkWeight" name="milkWeight" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="milkWeight" name="milkWeight" required value="{{ $data->KhoiLuongSua }}">
                @else
                <input type="text" class="form-control" id="milkWeight" name="milkWeight" required  value="{{ $data->KhoiLuongSua }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamWeight"><b>Khối lượng cream:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="creamWeight" name="creamWeight" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="creamWeight" name="creamWeight" required value="{{ $data->KhoiLuongCream }}">
                @else
                <input type="text" class="form-control" id="creamWeight" name="creamWeight" required value="{{ $data->KhoiLuongCream }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="milkWeightNeed"><b>Khối lượng sữa cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="milkWeightNeed" name="milkWeightNeed" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="milkWeightNeed" name="milkWeightNeed" required value="{{ $data->KhoiLuongSuaCanSx }}">
                @else
                <input type="text" class="form-control" id="milkWeightNeed" name="milkWeightNeed" required value="{{ $data->KhoiLuongSuaCanSx }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamWeightNeed"><b>Lượng cream cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="creamWeightNeed" name="creamWeightNeed" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="creamWeightNeed" name="creamWeightNeed" required value="{{ $data->KhoiLuongCreamCanSx }}">
                @else
                <input type="text" class="form-control" id="creamWeightNeed" name="creamWeightNeed" required value="{{ $data->KhoiLuongCreamCanSx }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="lipidAdded"><b>Lượng chất béo cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="lipidAdded" name="lipidAdded" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="lipidAdded" name="lipidAdded" required value="{{ $data->LuongChatBeoBoSung }}">
                @else
                <input type="text" class="form-control" id="lipidAdded" name="lipidAdded" required value="{{ $data->LuongChatBeoBoSung }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="skimMilk"><b>Lượng sữa gầy cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="skimMilk" name="skimMilk" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="skimMilk" name="skimMilk" required value="{{ $data->LuongSuaGayBoSung }}">
                @else
                <input type="text" class="form-control" id="skimMilk" name="skimMilk" required value="{{ $data->LuongSuaGayBoSung }}" disabled>
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
