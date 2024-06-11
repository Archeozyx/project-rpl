@extends('layout')

@section('content')
    {!! File::get(base_path($filePath)) !!}
@endsection
