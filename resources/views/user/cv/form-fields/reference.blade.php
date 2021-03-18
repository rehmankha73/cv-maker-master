<div class="ref-group row" style="margin-top:10px">
    @if(isset($reference))
        <div class="col-1"><label>Name:</label></div><div class="col-2"><input class="form-control" min="3" max="50" name="references[]" placeholder="PLease Enter Reference's Name" value="{{$reference->references}}" /></div>
        <div class="col-1"><label>Phone:</label></div><div class="col-3"><input type="number "class="form-control" min="3" max="50" name="refphone[]" placeholder="PLease Give Phone Number" value="{{$reference->refphone}}"/></div>
        <div class="col-1"><label>E-mail:</label></div><div class="col-3"><input type="email" class="form-control" min="3" max="50" name="refaddress[]" placeholder="Please Give Email" value="{{$reference->refaddress}}" /></div>
    @else
        <div class="col-1"><label>Name:</label></div><div class="col-2"><input class="form-control" min="3" max="50" name="references[]" placeholder="PLease Enter Reference's Name" /></div>
        <div class="col-1"><label>Phone:</label></div><div class="col-3"><input type="number "class="form-control" min="3" max="50" name="refphone[]" placeholder="PLease Give Phone Number"/></div>
        <div class="col-1"><label>E-mail:</label></div><div class="col-3"><input type="email" class="form-control" min="3" max="50" name="refaddress[]" placeholder="Please Give Email" /></div>
    @endif

    <div class="col-1">
        <button class="btn btn-danger remove-row" type="button">X</button>
    </div>
</div>
