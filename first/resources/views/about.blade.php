@extends('master')

<!-- @section('title','about_us') -->

@section('content')
<h1>About page</h1>
<h3>Users</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email/th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user )
    <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td> 
      <td>@twitter</td>
    @endforeach
      
    </tr>
  </tbody>
</table>
@endsection
