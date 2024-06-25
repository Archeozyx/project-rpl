@extends('admin.layout')

@section('content')
    <h1>Editable Pages</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->slug }}</td>
                    <td>
                        <a href="{{ route('admin.page', $page->slug) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.page.revert', $page->slug) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning">Revert to Previous Version</button>
                        </form>
                        
                        <form action="{{ route('admin.page.reset', $page->slug) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Reset to Default</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
