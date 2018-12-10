<div class="col-md-8">
    <div class="card">
        <div class="card-header">
          <h2 class="col-sm-8">Thông số cô đặc</h2>
        </div>
        <div class="card-body">

          <form method="post" action="{{ route('sample_test') }}">
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="sampleId"><b>ID:</b></label>
              </div>
              <div class="col-sm-7">
                <h4 id="sampleId">111</h4>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="temperatureCooling"><b>Nhiệt độ làm lạnh:</b></label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="temperatureCooling" name="temperature">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="lactose"><b>Tỷ lệ mầm lactose:</b></label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="lactose" name="lactose">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="fatConcentrate"><b>Nồng độ chất béo:</b></label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="fatConcentrate" name="fatConcentrate">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-1 col-sm-3">
                <label for="dryMatterConcentrate"><b>Nồng độ chất khô:</b></label>
              </div>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="dryMatterConcentrate" name="dryMatterConcentrate">
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
