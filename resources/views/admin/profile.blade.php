@extends('admin.layout')

@section('title', 'Contact Details')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">admin Details</h2>
    <p class="mb-0 text-white-50">Full admin details</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4">
      <a href="{{ route('show') }}" class="btn btn-secondary shadow-sm">← Back</a>
    </div>
      @foreach($users as $data)
     <div class="mb-3">
      <strong>Id:</strong> {{ $data->id }}
    </div>
    <div class="mb-3">
      <strong>Name:</strong> {{ $data->name }}
    </div>
    <div class="mb-3">
      <strong>Email:</strong> {{ $data->email }}
    </div>
    <div class="mb-3">
      <strong>Password:</strong> {{ $data->password  }}
    </div>
    @endforeach
   <div class="mb-4">
      <a href="{{ route('editadmin',$data->id) }}" class="btn btn-primary shadow-sm">← update</a>
    </div>
  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">
  
  </div>

</div>
@endsection
