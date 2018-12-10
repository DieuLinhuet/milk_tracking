
@extends('sample_form')

@section('form')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số thanh trùng</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('putRecord',['recordId'=>$recordId, 'phase'=>$phase]) }}">
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="sampleId"><b>ID:</b></label>
              </div>
              <div class="col-sm-6">
                <h4 id="sampleId">Bản ghi số {{$recordId}}</h4>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="dryMatterWeight"><b>Tổng hàm lượng chất khô:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="dryMatterWeight" name="dryMatter" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="lipidContent"><b>Hàm lượng béo:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="lipidContent" name="lipid" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="proteinContent"><b>Hàm lượng protein:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="proteinContent" name="protein" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="phosphatase"><b>Mẫu thử phosphatase:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="phosphatase" name="phosphatase" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="coliform"><b>Coliform:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="coliform" name="coliform" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="salmonella"><b>Salmonella:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="salmonella" name="salmonella" required>
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