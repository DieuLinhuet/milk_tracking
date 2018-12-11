
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
                <label for="TongHamLuongChatKho"><b>Tổng hàm lượng chất khô:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="TongHamLuongChatKho" name="TongHamLuongChatKho" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="TongHamLuongChatKho" name="TongHamLuongChatKho" required value="{{ $data->TongHamLuongChatKho }}">
                @else
                <input type="text" class="form-control" id="TongHamLuongChatKho" name="TongHamLuongChatKho" required  value="{{ $data->TongHamLuongChatKho }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="HamLuongBeo"><b>Hàm lượng béo:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="HamLuongBeo" name="HamLuongBeo" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="HamLuongBeo" name="HamLuongBeo" required value="{{ $data->HamLuongBeo }}">
                @else
                <input type="text" class="form-control" id="HamLuongBeo" name="HamLuongBeo" required value="{{ $data->HamLuongBeo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="MauThuPhosphatase"><b>Mẫu thử phosphatase:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="MauThuPhosphatase" name="MauThuPhosphatase" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="MauThuPhosphatase" name="MauThuPhosphatase" required value="{{ $data->MauThuPhosphatase }}">
                @else
                <input type="text" class="form-control" id="MauThuPhosphatase" name="MauThuPhosphatase" required value="{{ $data->MauThuPhosphatase }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="Coliform"><b>Coliform:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="Coliform" name="Coliform" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="Coliform" name="Coliform" required value="{{ $data->Coliform }}">
                @else
                <input type="text" class="form-control" id="Coliform" name="Coliform" required value="{{ $data->Coliform }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="Salmonella"><b>Salmonella:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="Salmonella" name="Salmonella" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="Salmonella" name="Salmonella" required value="{{ $data->Salmonella }}">
                @else
                <input type="text" class="form-control" id="Salmonella" name="Salmonella" required value="{{ $data->Salmonella }}" disabled>
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
