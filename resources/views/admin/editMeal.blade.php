@extends('admin.layout')

@section('title', 'Edit Meal')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Edit Meal</h2>
    <p class="mb-0 text-white-50">Update the details of this meal</p>
  </div>

  <div class="card-body bg-white p-5">
    <form action="{{ route('meals.update', $meal->id) }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf
      @method('PUT')

      <div class="mb-4">
        <a href="{{ route('mealsList') }}" class="btn btn-secondary shadow-sm">← Back</a>
      </div>

      <div class="mb-4">
        <label for="name" class="form-label fw-semibold">Meal Name</label>
        <input type="text" class="form-control form-control-lg rounded-3 shadow-sm" 
               id="name" name="name" value="{{ $meal->name }}">
        @error('name') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <label for="price" class="form-label fw-semibold">Price ($)</label>
          <input type="number" class="form-control form-control-lg rounded-3 shadow-sm" 
                 id="price" name="price" step="0.01" value="{{ $meal->price }}">
          @error('price') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
        </div>
        <div class="col-md-6">
          <label for="category" class="form-label fw-semibold">Category</label>
          <select class="form-select form-select-lg rounded-3 shadow-sm" id="category" name="category">
            <option value="">-- Select Category --</option>
            <option value="appetizer" {{ $meal->category == 'appetizer' ? 'selected' : '' }}>Appetizer</option>
            <option value="main course" {{ $meal->category == 'main course' ? 'selected' : '' }}>Main Course</option>
            <option value="dessert" {{ $meal->category == 'dessert' ? 'selected' : '' }}>Dessert</option>
            <option value="drink" {{ $meal->category == 'drink' ? 'selected' : '' }}>Drink</option>
          </select>
          @error('category') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
        </div>
      </div>

      <div class="mb-4">
        <label for="description" class="form-label fw-semibold">Description</label>
        <textarea class="form-control form-control-lg rounded-3 shadow-sm" id="description" 
                  name="description" rows="4">{{ $meal->description }}</textarea>
        @error('description') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="photo" class="form-label fw-semibold">Meal Photo</label>
        @if($meal->image)
          <div class="mb-2">
            <img src="{{ $meal->image }}" style="width:100px; height:100px; object-fit:cover;">
          </div>
        @endif
        <input class="form-control form-control-lg rounded-3 shadow-sm" type="file" id="photo" name="photo" accept="image/*">
        <div class="form-text">Upload a new image to replace the current one (optional)</div>
        @error('photo') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold">Availability</label>
        <div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="availability" id="availableYes" value="1" {{ $meal->available ? 'checked' : '' }}>
            <label class="form-check-label" for="availableYes">Available</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="availability" id="availableNo" value="0" {{ !$meal->available ? 'checked' : '' }}>
            <label class="form-check-label" for="availableNo">Not Available</label>
          </div>
        </div>
        @error('availability') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label for="stock" class="form-label fw-semibold">Stock</label>
        <input type="number" class="form-control form-control-lg rounded-3 shadow-sm" 
               id="stock" name="stock" value="{{ $meal->stock }}" min="0">
        @error('stock') <p class="text-danger fst-italic">{{ $message }}</p> @enderror
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-indigo btn-lg rounded-3 shadow">
          Update Meal
        </button>
      </div>
    </form>
  </div>

  <div class="card-footer text-center text-muted py-3 small bg-light">
  </div>
</div>
@endsection
