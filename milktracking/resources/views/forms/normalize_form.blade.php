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
                <h4 id="sampleId">111</h4>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="milkWeight"><b>Khối lượng sữa:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="milkWeight" name="milkWeight">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamWeight"><b>Khối lượng cream:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="creamWeight" name="creamWeight">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="milkWeightNeed"><b>Khối lượng sữa cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="milkWeightNeed" name="milkWeightNeed">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamWeightNeed"><b>Lượng cream cần sản xuất:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="creamWeightNeed" name="creamWeightNeed">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="lipidAdded"><b>Lượng chất béo cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="lipidAdded" name="lipidAdded">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="skimMilk"><b>Lượng sữa gầy cần bổ sung:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="skimMilk" name="skimMilk">
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
    </div>
</div>
@endsection