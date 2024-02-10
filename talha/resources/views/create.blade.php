@extends('layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card mt-4">
                <div class="card-header">Add New Student</div>

                <div class="card-body">
                    <form method="post" action="{{ route('storePage') }}">
                        @csrf

                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" name="gender">
                        </div>

                        <div class="form-group">
                            <label for="qualifications">Qualifications:</label>
                            <input type="text" class="form-control" name="qualifications">
                        </div>

                        <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
