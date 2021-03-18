@extends('company.layouts.companyaccount')

@section('centermain')
    <div class="container">
        <h1 id="heading"><i class="fas fa-star pt-4 mr-3"></i>Give Feedback</h1>
        <p>Your Feedback is very valuable for us for future use.please provide your suggestion and rated us. Thanks!</p>
        <hr class="bg-success">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('flash::message')

        <form action="{{url('/company/dashboard/testimonial')}}" method="POST" class="pb-5">
            @csrf

            <div>
                <strong>Please Rate Us and give your opions about us !</strong>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status1" value="1" {{((int) old('status', 1)) == 1 ? 'checked' : ''}}>
                        <label>Satisfied</label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status2" value="0" {{((int) old('status', 1)) == 0 ? 'checked' : ''}}>
                    <label class="form-check-label" for="status2">
                        Not Satisfied
                    </label>
                </div>
            </div>

            <div class="md-form pt-4">
                <label for="message"><strong>Your Feedback & suggestion!</strong></label>
                <textarea style="border:1px solid black" type="text"  name="message" rows="5" class="form-control md-textarea">{{old('message')}}</textarea>
            </div>
            <div class="md-form my-5">
                <button type="submit" class="btn btn-lg btn-success" style="width: 100%"> Send</button>
            </div>
        </form>
    </div>
@endsection
