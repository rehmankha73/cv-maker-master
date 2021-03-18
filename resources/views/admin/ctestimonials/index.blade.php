@extends('admin.layouts.app')
@section('content')
    <h1><i class="fas fa-star"></i> &nbsp; Company Testimonials</h1>
    <style>
        a:hover{color:black;}
        th,td{
            color: black;
        }
    </style>
    @include('flash::message')
    @include('layouts.errors')<section class="bg-white mt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Feedback</th>
            <th scope="col">Status</th>
            <th scope="col">Post By</th>
            <th scope="col">Sender Email</th>
            <th scope="col">Created at</th>
            <th scope="col">Op</th>
        </tr>
        </thead>
        <tbody>
        @if($test->count())
            @foreach($test as $t)
                <tr>
                    <td class="text-justify">{{$t->message}}</td>
                    <td>{{$t->status}}</td>
                    <td>{{$t->company->name}}</td>
                    <td>{{$t->company->email}}</td>
                    <td>{{$t->created_at->toDayDateTimeString()}}</td>
                    <td>
                        <button type="button" class="btn btn-danger"
                                data-url="{{route('admin.ctestimonials.destroy', [$t->id])}}"
                                data-toggle="modal"
                                data-target="#deleteModal">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <div class="alert alert-info">No Job Posts Found.</div>
        @endif
        </tbody>
    </table>
</section>

    <!-- Modal -->
    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header bg-danger" >
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Conformation Dialogue?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mb-5">
                        Are your sure to want to delete it completely!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger">Delete!</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection


@section('scripts')
    <script type="text/javascript">
        $('#deleteModal').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget) // Button that triggered the modal
            var url = button.data('url') // Extract info from data-* attributes

            $('#deleteForm').attr('action', url);
            console.log(url);
        })
    </script>
@endsection
