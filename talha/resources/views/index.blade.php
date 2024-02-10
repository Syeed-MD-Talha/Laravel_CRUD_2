@extends('layout.master')

@section('content')

<div class="container mt-4">
  <div class="d-flex justify-content-center">
    <h3>This is Database Table</h3>
  </div>

  <div class="table-container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Qualifications</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($crud as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->last_name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->qualifications}}</td>
            <td>
                <form action="{{route('edit',$item->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <button type="submit" class="btn btn-info">Edit</button>
                  </form>
            </td>
            <td>
              <form action="{{route('Delete',$item->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
