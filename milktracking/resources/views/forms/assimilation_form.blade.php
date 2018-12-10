<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số chuẩn hóa</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('sample_test') }}">
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
                <label for="assimilationTemperature"><b>Nhiệt độ đồng hóa:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="assimilationTemperature" name="temperature">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="assimilationPressure"><b>Áp suất đồng hóa:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="assimilationPressure" name="pressure">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="emulsifier"><b>Chất nhũ hóa được sử dụng:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="emulsifier" name="emulsifier">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="casein"><b>Hàm lượng casein:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="casein" name="casein">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="creamParticle"><b>Kích thước hạt kem:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="creamParticle" name="creamParticle">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-4">
                <label for="centrifugalTime"><b>Thời gian ly tâm:</b></label>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="centrifugalTime" name="centrifugal">
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
