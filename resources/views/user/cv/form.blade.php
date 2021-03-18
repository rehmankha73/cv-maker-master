@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Full Name:</label>
        <input name="name" type="text" class="form-control" id="fName" placeholder="Enter Your Full Name:e.g:John Sha" value="{{old('name', is_null($cv) ? '' : $cv->name)}}">
    </div>
    <div class="form-group col-md-6">
        <label for="fathername">Father Name:</label>
        <input name="fathername" type="Text" class="form-control" id="fAName" placeholder="Enter Father Name" value="{{old('fathername', is_null($cv) ? '' : $cv->fathername)}}">
    </div>
    <div class="form-group col-md-6">
        <label>Your Biography:</label>
        <textarea name="biography" class="form-control" placeholder="Enter About You"  rows="3" cols="200">{{old('biography', is_null($cv) ? '' : $cv->biography)}}</textarea>
    </div>
    <div class="avatar-upload col-6">
        <div class="avatar-edit">
            <input type='file' name="image" />
            <label for="imageUpload"></label>
            <img id="blah" src="https://www.tutsmake.com/wp-content/uploads/2019/01/no-image-tut.png" class="" width="200" height="150"/>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputPosition">Position</label>
        <input type="text" name="position" class="form-control" id="inputPosition" placeholder="as a manager,prograamer designer etc" value="{{old('position', is_null($cv) ? '' : $cv->position)}}">
    </div>
    <div class="form-group col-md-6">
        <label for="inputDate">Date of Birth:</label>
        <input type="date" name="date" class="form-control" id="inputDate" value="{{old('date', is_null($cv) ? '' : $cv->date)}}">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address(Line 1):</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{old('address', is_null($cv) ? '' : $cv->address)}}">
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="inputEmail">Email:</label>
        <input type="email" name="email"  class="form-control" id="inputEmail" placeholder="Enter your Email like abc123@gmail.com" value="{{old('email', is_null($cv) ? '' : $cv->email)}}">
{{--        If more than one, please use comma to seperate them!--}}
    </div>
    <div class="form-group col-md-6">
        <label for="inputContact">Contact/Cell Number:</label>
        <input type="text" name="number" class="form-control" id="inputContact" placeholder="Enter Your Phone numbe/Cell number:+12345" value="{{old('number', is_null($cv) ? '' : $cv->number)}}">
{{--        If more than one, please use comma to seperate them!--}}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        <label for="inputFacebook">Facebook link:</label>
        <input type="text" name="facebook"  class="form-control" id="inputFacebook" placeholder="Attach your FACEBOOK profile link" value="{{old('facebook', is_null($cv) ? '' : $cv->facebook)}}">
    </div>
    <div class="form-group col-md-4">
        <label for="inputLinkedin">Linkedin link:</label>
        <input type="text" name="linkedin"  class="form-control" id="inputLinkedin" placeholder="Attach your LINKEDIN profile link" value="{{old('linkedin', is_null($cv) ? '' : $cv->linkedin)}}">
    </div>
    <div class="form-group col-md-4">
        <label for="inputTwitter">Twitter link:</label>
        <input type="text" name="twitter"  class="form-control" id="inputTwitter" placeholder="Attach your TWITTER profile link" value="{{old('twitter', is_null($cv) ? '' : $cv->twitter)}}">
    </div>
</div>

<hr>

<h1> Qualifications</h1>
<hr>
<div class="form-group">
    <!-- test -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group control-group after-add-more">
                <button id="add-qualification" class="btn btn-info" type="button">Add</button>
            </div>
            <!-- </form> -->
            <div id="qualifications">
                @if(old('degree'))
                    @for($i = 0; $i < count(old('degree', [])); $i++)
                        @include('user.cv.form-fields.qualification', ['qualification' => new \App\Qualification([
                            'degree' => old('degree.'.$i),
                            'insitude' => old('insitude.'.$i),
                            'session' => old('session.'.$i),
                            'marks' => old('marks.'.$i),
                            'total' => old('total.'.$i),
                            'Q_des' => old('Q_des.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->qualifications))
                    @foreach($cv->qualifications as $qualification)
                        @include('user.cv.form-fields.qualification', ['qualification' => $qualification])
                    @endforeach
                @else
                    @include('user.cv.form-fields.qualification')
                @endif
            </div>
        </div>
    </div>
    <!-- test end -->
</div>

<hr>

<h1>Expereince</h1>
<hr>
<div class="form-group">
    <!-- test -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group experience-group after-add-experience">
                <button class="btn btn-info" id="add-experience" type="button">Add</button>
            </div>
            <!-- </form> -->
            <div id="experiences">
                @if(old('companies'))
                    @for($i = 0; $i < count(old('companies', [])); $i++)
                        @include('user.cv.form-fields.experience', ['experience' => new \App\Experience([
                            'companies' => old('companies.'.$i),
                            'posts' => old('posts.'.$i),
                            'join_date' => old('join_date.'.$i),
                            'leave_date' => old('leave_date.'.$i),
                            'E_des' => old('E_des.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->experiences))
                    @foreach($cv->experiences as $experience)
                        @include('user.cv.form-fields.experience', ['experience' => $experience])
                    @endforeach
                @else
                    @include('user.cv.form-fields.experience')
                @endif
            </div>
        </div>
    </div>
    <!-- test end -->
</div>

<hr>

<h1>Expertise & Skills</h1>
<hr>
<div class="form-group">
    <!-- test -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group sk-group after-add-sk">
                <button id="add-skill" class="btn btn-info add-sk" type="button">Add</button>
            </div>
            <div id="skills">
                @if(old('skills'))
                    @for($i = 0; $i < count(old('skills', [])); $i++)
                        @include('user.cv.form-fields.skill', ['skill' => new \App\Skills([
                            'skills' => old('skills.'.$i),
                            'skills_level' => old('skills_level.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->skills))
                    @foreach($cv->skills as $skill)
                        @include('user.cv.form-fields.skill', ['skill' => $skill])
                    @endforeach
                @else
                    @include('user.cv.form-fields.skill')
                @endif
            </div>
        </div>
    </div>
</div>

<h1>Languages</h1>
<hr>
<div class="form-group">
    <!-- test -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group l-group after-add-l">
                <button id="add-l" class="btn btn-info add-l" type="button">Add</button>
            </div>
            <!-- </form> -->
            <!-- Copy Fields -->
            <div id="l">
                @if(old('languages'))
                    @for($i = 0; $i < count(old('languages', [])); $i++)
                        @include('user.cv.form-fields.language', ['language' => new \App\Languages([
                            'languages' => old('languages.'.$i),
                            'languages_level' => old('languages_level.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->languages))
                    @foreach($cv->languages as $language)
                        @include('user.cv.form-fields.language', ['language' => $language])
                    @endforeach
                @else
                    @include('user.cv.form-fields.language')
                @endif
            </div>
        </div>
    </div>
    <!-- test end -->
</div>


<h1>Hobbies & Games</h1>
<hr>
<div class="form-group">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group hobby-group after-add-hobby">
                <button id="add-hobby" class="btn btn-info add-hobby" type="button">Add</button>
            </div>

            <div id="hobbies">
                @if(old('hobbies'))
                    @for($i = 0; $i < count(old('hobbies', [])); $i++)
                        @include('user.cv.form-fields.hobby', ['hobby' => new \App\Hobbies([
                            'hobbies' => old('hobbies.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->hobbies))
                    @foreach($cv->hobbies as $hobby)
                        @include('user.cv.form-fields.hobby', ['hobby' => $hobby])
                    @endforeach
                @else
                    @include('user.cv.form-fields.hobby')
                @endif
            </div>
        </div>
    </div>
    <!-- test end -->
</div>

<hr>

<h1>Reference</h1>
<hr>
<div class="form-group">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="input-group ref-group after-add-ref">
                <button id="add-reference" class="btn btn-info add-ref" type="button">Add</button>
            </div>

            <div id="references">
                @if(old('references'))
                    @for($i = 0; $i < count(old('references', [])); $i++)
                        @include('user.cv.form-fields.reference', ['reference' => new \App\Reference([
                            'references' => old('references.'.$i),
                            'refphone' => old('refphone.'.$i),
                            'refaddress' => old('refaddress.'.$i),
                        ])])
                    @endfor
                @elseif(!is_null($cv) && !is_null($cv->references))
                    @foreach($cv->references as $reference)
                        @include('user.cv.form-fields.reference', ['reference' => $reference])
                    @endforeach
                @else
                    @include('user.cv.form-fields.reference')
                @endif
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success btn-block">Save</button>
