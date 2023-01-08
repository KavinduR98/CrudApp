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
    @if($msg = Session::get('add'))
        <div class="alert alert-success">
            <p>{{$msg}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($city as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->code}}</td>
            <td>{{$data->name}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('city.edit',$data->id)}}">Edit</a>
                <a class="btn btn-danger" href="#">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>


@endsection