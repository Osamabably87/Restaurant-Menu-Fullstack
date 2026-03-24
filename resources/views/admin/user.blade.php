@extends('admin.layout')

@section('title', 'Manage Meals')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Manage users</h2>
    <p class="mb-0 text-white-50">All users in the system</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4 text-end">
      <a href="{{ route('create') }}" class="btn btn-indigo shadow-sm">+ Add New user</a>
    </div>

    <table class="table table-bordered table-hover align-middle">
      <thead class="table-light" style="background-color:#c19a6b ">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>password</th>
          <th>role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($users as $user)
        <tr>
          
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->password }}</td>
          <td>{{ $user->role }}</td>
          <td class="d-flex">
            <a href="{{ route('prest', $user->id) }}" class="btn btn-sm btn-info">Show</a>
            <a href="{{ route('edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('destroy', $user->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">
  </div>
</div>
@endsection
