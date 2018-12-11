@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số cô đặc</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('putRecord',['recordId'=>$recordId, 'phase'=>$phase]) }}">
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
                <label for="temperatureCooling"><b>Nhiệt độ làm lạnh:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="temperatureCooling" name="temperature" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="temperatureCooling" name="temperature" required value="{{ $data->NhietDoLamLanh }}">
                @else
                <input type="text" class="form-control" id="temperatureCooling" name="temperature" required value="{{ $data->NhietDoLamLanh }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="timeCooling"><b>Thời gian làm lạnh:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="timeCooling" name="timeCooling" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="timeCooling" name="timeCooling" required value="{{ $data->ThoiGianLamLanh }}">
                @else
                <input type="text" class="form-control" id="timeCooling" name="timeCooling" required value="{{ $data->ThoiGianLamLanh }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="lactose"><b>Tỷ lệ mầm lactose:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="lactose" name="lactose" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="lactose" name="lactose" required value="{{ $data->Lactose }}">
                @else
                <input type="text" class="form-control" id="lactose" name="lactose" required value="{{ $data->Lactose }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="fatConcentrate"><b>Nồng độ chất béo:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="fatConcentrate" name="fatConcentrate">
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="fatConcentrate" name="fatConcentrate" value="{{ $data->NongDoChatBeo }}">
                @else
                <input type="text" class="form-control" id="fatConcentrate" name="fatConcentrate" value="{{ $data->NongDoChatBeo }}" disabled>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="dryMatterConcentrate"><b>Nồng độ chất khô:</b></label>
              </div>
              <div class="col-sm-7">
                @if($data == null)
                <input type="text" class="form-control" id="dryMatterConcentrate" name="dryMatterConcentrate" required>
                @elseif($role == 'admin')
                <input type="text" class="form-control" id="dryMatterConcentrate" name="dryMatterConcentrate" required value="{{ $data->NongDoChatKho }}">
                @else
                <input type="text" class="form-control" id="dryMatterConcentrate" name="dryMatterConcentrate" required value="{{ $data->NongDoChatKho }}" disabled>
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
              <button type="submit" class="btn btn-primary">Hoàn thành</button>
            </div>
          </form>

        </div>
    </div>
</div>
@endsection
