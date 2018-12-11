@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số đồng hóa</h2>
        </div>
        <div class="card-body">

          <form method="POST" action="{{ route('putRecord',['recordId'=>$recordId, 'phase'=>$phase]) }}">
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
                <label for="assimilationTemperature"><b>Nhiệt độ đồng hóa:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="assimilationTemperature" name="temperature" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="assimilationTemperature" name="temperature" required value="{{ $data->NhietDo }}">
                @else
                <input type="text" class="form-control" id="assimilationTemperature" name="temperature" required required value="{{ $data->NhietDo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="assimilationPressure"><b>Áp suất đồng hóa:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="assimilationPressure" name="pressure" required value="">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="assimilationPressure" name="pressure" required value="{{ $data->ApSuat }}">
                @else
                <input type="text" class="form-control" id="assimilationPressure" name="pressure" required value="{{ $data->ApSuat }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="emulsifier"><b>Chất nhũ hóa được sử dụng:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="emulsifier" name="emulsifier" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="emulsifier" name="emulsifier" required value="{{ $data->ChatNhuHoa }}">
                @else
                <input type="text" class="form-control" id="emulsifier" name="emulsifier" required value="{{ $data->ChatNhuHoa }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="casein"><b>Hàm lượng casein:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="casein" name="casein" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="casein" name="casein" required value="{{ $data->HamLuongCasein }}">
                @else
                <input type="text" class="form-control" id="casein" name="casein" required value="{{ $data->HamLuongCasein }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamParticle"><b>Kích thước hạt kem:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="creamParticle" name="creamParticle" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="creamParticle" name="creamParticle" required value="{{ $data->KichThuocHatKem }}">
                @else
                <input type="text" class="form-control" id="creamParticle" name="creamParticle" required value="{{ $data->KichThuocHatKem }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="centrifugalTime"><b>Thời gian ly tâm:</b></label>
              </div>
              <div class="col-sm-6">
                @if($data == null)
                <input type="text" class="form-control" id="centrifugalTime" name="centrifugal" required>
                @elseif($role == 'admin')
                @else
                <input type="text" class="form-control" id="centrifugalTime" name="centrifugal" required value="{{ $data->ThoiGianLytam }}">
                <input type="text" class="form-control" id="centrifugalTime" name="centrifugal" required  value="{{ $data->ThoiGianLytam }}" disabled>
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
