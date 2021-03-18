<div class="experience-group input-group row" style="margin-top:10px">
    @if(isset($experience))
        <div class="form-group col-md-2">
            <input type="text" name="companies[]"  class="form-control" placeholder="Company Name:" value="{{$experience->companies}}">
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="posts[]" class="form-control" placeholder="Post Name:" value="{{$experience->posts}}">
        </div>
        <div class="form-group col-md-3">
            <input type="date" name="join_date[]"  class="form-control" placeholder="Join Date:" value="{{$experience->join_date}}">
        </div>
        <div class="form-group col-md-3">
            <input type="date" name="leave_date[]" class="form-control" placeholder="Leaving Date:" value="{{$experience->leave_date}}">
        </div>
        <div class="form-group col-md-1">
            <button class="btn btn-danger remove-row" type="button">X</button>
        </div>
        <div class="col-md-11">
            <textarea name="E_des[]" class="form-control" placeholder="Enter About You"  rows="3" cols="200">{{$experience->E_des}}</textarea>
        </div>
    @else
        <div class="form-group col-md-2">
            <input type="text" name="companies[]"  class="form-control" placeholder="Company Name:">
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="posts[]" class="form-control" placeholder="Post Name:">
        </div>
        <div class="form-group col-md-3">
            <input type="date" name="join_date[]"  class="form-control" placeholder="Join Date:">
        </div>
        <div class="form-group col-md-3">
            <input type="date" name="leave_date[]" class="form-control" placeholder="Leaving Date:">
        </div>
        <div class="form-group col-md-1">
            <button class="btn btn-danger remove-row" type="button">X</button>
        </div>
        <div class="col-md-11">
            <textarea name="E_des[]" class="form-control" placeholder="Enter About You"  rows="3" cols="200"></textarea>
        </div>
    @endif
</div>
