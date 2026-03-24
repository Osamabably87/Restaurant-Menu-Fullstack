@extends('admin.layout')

@section('title', 'Meal Details')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Meal Details</h2>
    <p class="mb-0 text-white-50">Full information of this meal</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4">
      <a href="{{ route('mealsList') }}" class="btn btn-secondary shadow-sm">← Back</a>
    </div>

    <div class="mb-3">
      <strong>Name:</strong> {{ $meal->name }}
    </div>
    <div class="mb-3">
      <strong>Description:</strong>
      <p class="mt-2">{{ $meal->description }}</p>
    </div>
    <div class="mb-3">
      <strong>Price:</strong> ${{ number_format($meal->price, 2) }}
    </div>
    <div class="mb-3">
      <strong>Category:</strong> {{ ucfirst($meal->category) }}
    </div>
    <div class="mb-3">
      <strong>Available:</strong>
      @if($meal->available)
        <span class="badge bg-success">Yes</span>
      @else
        <span class="badge bg-danger">No</span>
      @endif
    </div>
    <div class="mb-3">
      <strong>Stock:</strong> {{ $meal->stock ?? 'N/A' }}
    </div>
    <div class="mb-3">
  <strong>Image:</strong><br>
  @if($meal->image)
    <div class="mb-2">
      <img src="{{ $meal->image }}" style="width:150px; height:150px; object-fit:cover;" alt="{{ $meal->name }}">
    </div>
  @else
    <span class="text-muted">No Image</span>
  @endif
</div>

  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">

  </div>

</div>
@endsection
