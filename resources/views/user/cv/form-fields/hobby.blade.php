<div class="hobby-group row" style="margin-top:10px">
    @if(isset($hobby))
        <div class="col-11">
            <input name="hobbies[]" class="form-control" min="3" max="100" value="{{$hobby->hobbies}}" />
        </div>
    @else
        <div class="col-11">
            <input name="hobbies[]" class="form-control" min="3" max="100" />
        </div>
    @endif

    <div class="col-1">
        <button class="btn btn-danger remove-row" type="button">X</button>
    </div>
</div>
