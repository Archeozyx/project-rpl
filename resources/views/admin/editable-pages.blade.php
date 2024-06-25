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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
