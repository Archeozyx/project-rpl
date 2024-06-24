@extends('admin.layout')

@section('content')
    <h1>User Management</h1>

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Buat User</a>

    <form action="{{ route('admin.users') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control mt-3" placeholder="Cari users..." value="{{ $search }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Privilege</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->privilege }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.users.delete', $user) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->appends(['search' => $search])->links() }}
@endsection
