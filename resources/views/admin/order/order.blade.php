@extends('admin.layout')

@section('title', 'Admin Dashboard')

@section('content')


<div class="container">
    <h1>All Orders</h1>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>email</th>
                <th>phone</th>
                <th>Address</th>
                 <th>Meal</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->user->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->Address }}</td>
                <td>{{ $order->meal }}</td>
                <td><a class="btn btn-outline-success" href="{{ route('admin.orders.show', $order->id) }}">View</a></td>
                <td>
                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger"  type="submit" onclick="return confirm('Delete this order?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
