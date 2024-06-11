@extends('layout')

@section('content')
    {!! Blade::render(File::get(base_path($filePath)), ['filePath' => $filePath]) !!}
@endsection
