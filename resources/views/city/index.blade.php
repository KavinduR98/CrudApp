@extends('city.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-right" style="margin-top: 10px; margin-left: 1172px;">
                <a href="{{route('city.create')}}" class="btn btn-success">Add New City</a>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <tr>
            <!-- For view user records -->
        </tr>
    </table>


@endsection