@extends('admin.layout')

@section('content')
    <h1>Edit Report</h1>

    <form action="{{ route('admin.report.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $order->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $order->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $order->phone }}" required>
        </div>

        <div class="form-group">
            <label for="event">Acara</label>
            <input type="text" name="event" id="event" class="form-control" value="{{ $order->event }}" required>
        </div>

        <div class="form-group">
            <label for="tickets">Jumlah Tiket</label>
            <input type="number" name="tickets" id="tickets" class="form-control" value="{{ $order->tickets }}" required>
        </div>

        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $order->date }}" required>
        </div>

        <div class="form-group">
            <label for="time">Waktu</label>
            <input type="time" name="time" id="time" class="form-control" value="{{ $order->time }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $order->status === 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $order->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
