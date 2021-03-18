<div class="control-group input-group" style="margin-top:10px">
    <div class="row">
        @if(isset($qualification))
            <div class="form-group col-md-2">
                <input type="text" name="degree[]"  class="form-control" placeholder="Enter your Degree Name:" value="{{$qualification->degree}}">
                <input type="hidden" id="count" name="count" value="0">
            </div>
            <div class="form-group col-md-3">
                <input type="text" name="insitude[]" class="form-control" placeholder="Enter Your Insitude Name:" value="{{$qualification->insitude}}">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="session[]"  class="form-control" placeholder="Enter your Session:" value="{{$qualification->session}}">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="marks[]" class="form-control" placeholder="Enter Your Number:" value="{{$qualification->marks}}">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="total[]"  class="form-control" placeholder="Enter Total:" value="{{$qualification->total}}">
            </div>
            <div class="form-group col-md-1">
                <button class="btn btn-danger remove-row" type="button">X</button>
            </div>
            <div class="col-md-11">
                <textarea name="Q_des[]" class="form-control" placeholder="Enter About You"  rows="3" cols="200">{{$qualification->Q_des}}</textarea>
            </div>
        @else
            <div class="form-group col-md-2">
                <input type="text" name="degree[]"  class="form-control" placeholder="Enter your Degree Name:">
                <input type="hidden" id="count" name="count" value="0">
            </div>
            <div class="form-group col-md-3">
                <input type="text" name="insitude[]" class="form-control" placeholder="Enter Your Insitude Name:">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="session[]"  class="form-control" placeholder="Enter your Session:">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="marks[]" class="form-control" placeholder="Enter Your Number:">
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="total[]"  class="form-control" placeholder="Enter Total:">
            </div>
            <div class="form-group col-md-1">
                <button class="btn btn-danger remove-row" type="button">X</button>
            </div>
            <div class="col-md-11">
                <textarea name="Q_des[]" class="form-control" placeholder="Enter About You"  rows="3" cols="200"></textarea>
            </div>
        @endif
    </div>
</div>
