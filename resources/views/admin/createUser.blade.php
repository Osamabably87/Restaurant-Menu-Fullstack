@extends('admin.layout')

@section('title', 'Add New User')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Add a New User</h2>
   
  </div>

  <!-- Form Body -->
  <div class="card-body bg-white p-5">
    @if (Session::has('msg'))
              <div style="color: forestgreen">{{Session::get('msg')}}</div>
                  
              @endif
    <form action="{{ route('store') }}" method="POST" novalidate    enctype="multipart/form-data">
      @csrf

      <!-- Back Button -->
      <div class="mb-4">
        <a href="{{ route('show') }}" class="btn btn-secondary shadow-sm">← Back</a>
      </div>

      <!-- Meal Name -->
      <div class="row mb-4">
          <div class="col-md-6">
        <label for="name" class="form-label fw-semibold">User Name</label>
        <input type="text" class="form-control form-control-lg rounded-3 shadow-sm" 
               id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
      </div>
      </div>
      <!-- Price + Category Row -->
      <div class="row mb-4">
        <div class="col-md-6">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control form-control-lg rounded-3 shadow-sm" 
                 id="email" name="email" step="0.01" value="{{ old('email') }}" required>
                 @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
        </div>
        
      </div>


      <div class="row mb-4">
        <div class="col-md-6">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input type="password" class="form-control form-control-lg rounded-3 shadow-sm" 
                 id="password" name="password" step="0.01" required>
                 @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
        </div>
        
      </div>


      <div class="row mb-4">
        <div class="col-md-6">
          <label for="password" class="form-label fw-semibold"> confrim Password</label>
          <input type="password" class="form-control form-control-lg rounded-3 shadow-sm" 
                 id="password" name="password_confirmation" step="0.01"  required>
                 @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
        </div>
        
      </div>
      

      
      <!-- Submit -->
      <div class="d-grid">
        <button type="submit" class="btn btn-indigo btn-lg rounded-3 shadow">
          Add User
        </button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">
  </div>
</div>
@endsection
