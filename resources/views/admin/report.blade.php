@extends('admin.layout')

@section('content')
    <h1>Report Management</h1>

    <form action="{{ route('admin.report') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari pesanan..." value="{{ $search }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Email Pengguna</th>
                <th>Name</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Acara</th>
                <th>Tiket</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->user_email }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->event }}</td>
                    <td>{{ $order->tickets }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->time }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.report.edit', $order) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->appends(['search' => $search])->links() }}
@endsection
