
@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số thanh trùng</h2>
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
                <label for="dryMatterWeight"><b>Tổng hàm lượng chất khô:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="dryMatterWeight" name="dryMatter" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="dryMatterWeight" name="dryMatter" required value="{{ $data->TongHamLuongChatKho }}">
                @else
                <input type="text" class="form-control" id="dryMatterWeight" name="dryMatter" required  value="{{ $data->TongHamLuongChatKho }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="lipidContent"><b>Hàm lượng béo:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="lipidContent" name="lipid" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="lipidContent" name="lipid" required value="{{ $data->HamLuongBeo }}">
                @else
                <input type="text" class="form-control" id="lipidContent" name="lipid" required value="{{ $data->HamLuongBeo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="phosphatase"><b>Mẫu thử phosphatase:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="phosphatase" name="phosphatase" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="phosphatase" name="phosphatase" required value="{{ $data->MauThuPhosphatase }}">
                @else
                <input type="text" class="form-control" id="phosphatase" name="phosphatase" required value="{{ $data->MauThuPhosphatase }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="coliform"><b>Coliform:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="coliform" name="coliform" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="coliform" name="coliform" required value="{{ $data->Coliform }}">
                @else
                <input type="text" class="form-control" id="coliform" name="coliform" required value="{{ $data->Coliform }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="salmonella"><b>Salmonella:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="salmonella" name="salmonella" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="salmonella" name="salmonella" required value="{{ $data->Salmonella }}">
                @else
                <input type="text" class="form-control" id="salmonella" name="salmonella" required value="{{ $data->Salmonella }}" disabled>
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
