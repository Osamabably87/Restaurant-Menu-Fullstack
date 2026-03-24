@extends('admin.layout')

@section('title', 'Manage Contacts')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

  <!-- Header -->
  <div class="card-header bg-indigo text-white text-center py-4">
    <h2 class="fw-bold mb-0">Manage Contacts</h2>
    <p class="mb-0 text-white-50">All contacts in the system</p>
  </div>

  <!-- Body -->
  <div class="card-body bg-white p-5">

    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
          
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contacts as $contact)
        <tr>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone ?? 'N/A' }}</td>
          <td>{{ Str::limit($contact->message, 50) }}</td>
          
          <td>
            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-primary">Show</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-crimson" onclick="return confirm('Are you sure?')">Delete</button>
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
