@extends('admin.layout')

@section('title', 'Manage Meals')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Manage Meals</h2>
    <p class="mb-0 text-white-50">All meals in the system</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4 text-end">
      <a href="{{ route('meals.create') }}" class="btn btn-indigo shadow-sm">+ Add New Meal</a>
    </div>

    <table class="table table-bordered table-hover align-middle">
      <thead class="table-light" style="background-color:#c19a6b ">
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Category</th>
          <th>Available</th>
          <th>Stock</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($meals as $meal)
        <tr>
            <td>
            @if($meal->image)
          <div class="mb-2">
            <img src="{{ $meal->image }}" style="width:100px; height:100px; object-fit:cover;">
          </div>
        @endif
          </td>
          <td>{{ $meal->name }}</td>
          <td>{{ substr($meal->description, 0, 50) }}</td>
          <td>{{ number_format($meal->price, 2) }}</td>
          <td>{{ $meal->category }}</td>
          <td>{{ $meal->available ? 'Yes' : 'No' }}</td>
          <td>{{ $meal->stock ?? 'N/A' }}</td>
          <td>
            <a href="{{ route('meals.show', $meal->id) }}" class="btn btn-sm btn-info">Show</a>
            <a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('meals.destroy', $meal->id) }}" method="POST" style="display:inline-block;">
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
