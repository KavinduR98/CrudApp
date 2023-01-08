@extends('city.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Update Record</h2>
            </div>
            <div class="float-right" style="margin-top: 10px; margin-left: 1172px;">
                
            </div>
        </div>
    </div>
    <br>

    <form action="{{route('city.update',$city->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" class="form-control" value="{{$city->code}}" placeholder="Enter code" name="code">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="code">Name:</label>
                    <input type="text" class="form-control" value="{{$city->name}}" placeholder="Enter name" name="name">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{route('city.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </form>
    


@endsection