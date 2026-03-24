@extends('admin.layout')

@section('title', 'Contact Details')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Contact Details</h2>
    <p class="mb-0 text-white-50">Full message details</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4">
      <a href="{{ route('contactsList') }}" class="btn btn-secondary shadow-sm">← Back</a>
    </div>

    <div class="mb-3">
      <strong>Name:</strong> {{ $contact->name }}
    </div>
    <div class="mb-3">
      <strong>Email:</strong> {{ $contact->email }}
    </div>
    <div class="mb-3">
      <strong>Phone:</strong> {{ $contact->phone ?? 'N/A' }}
    </div>
    
    <div class="mb-3">
      <strong>Message:</strong>
      <p class="mt-2">{{ $contact->message }}</p>
    </div>
  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">
  
  </div>

</div>
@endsection
