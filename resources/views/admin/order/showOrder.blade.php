@extends('admin.layout')

@section('title', 'Contact Details')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">order Details</h2>
    <p class="mb-0 text-white-50">Full order details</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">
    <div class="mb-4">
      <a href="{{ route('admin.orders') }}" class="btn btn-secondary shadow-sm">← Back</a>
    </div>

     <div class="mb-3">
      <strong>Id:</strong> {{ $order->id }}
    </div>
    <div class="mb-3">
      <strong>Name:</strong> {{ $order->name }}
    </div>
    <div class="mb-3">
      <strong>Email:</strong> {{ $order->email }}
    </div>
    <div class="mb-3">
      <strong>phone:</strong> {{ $order->phone  }}
    </div>
    <div class="mb-3">
      <strong>Address:</strong> {{ $order->Address  }}
    </div>
     <div class="mb-3">
      <strong>meal:</strong> {{ $order->meal  }}
    </div>
    
   
  </div>

  <!-- Footer -->
  <div class="card-footer text-center text-muted py-3 small bg-light">
  
  </div>

</div>
@endsection
