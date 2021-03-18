<div class="input-group row" style="margin-top:10px">
    @if(isset($skill))
        <div class="form-group col-sm-7">
            <input name="skills[]" type="text" class="form-control" min="3" max="100" placeholder="Title" value="{{$skill->skills}}" />
        </div>
        <div class="form-group col-sm-4">
            <input name="skills_level[]" type="number" class="form-control" min="1" max="100" placeholder="1-100" value="{{$skill->skills_level}}" />
        </div>
    @else
        <div class="form-group col-sm-7">
            <input name="skills[]" type="text" class="form-control" min="3" max="100" placeholder="Title" />
        </div>
        <div class="form-group col-sm-4">
            <input name="skills_level[]" type="number" class="form-control" min="1" max="100" placeholder="1-100" />
        </div>
    @endif
    <div class="form-group col-sm-1">
        <button class="btn btn-danger remove-row" type="button">X</button>
    </div>
</div>
