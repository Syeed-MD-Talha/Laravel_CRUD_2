@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card mt-4">
                <div class="card-header">Add New Student</div>

                <div class="card-body">
                    <form method="post" action="{{route('update',['id'=>$crud->id])}}">
                        @method("patch")
                        @csrf
                    
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" name="first_name" value="{{$crud->first_name}}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" name="last_name"value="{{$crud->last_name}}">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" name="gender"value="{{$crud->gender}}">
                        </div>

                        <div class="form-group">
                            <label for="qualifications">Qualifications:</label>
                            <input type="text" class="form-control" name="qualifications"value="{{$crud->qualifications}}">
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
