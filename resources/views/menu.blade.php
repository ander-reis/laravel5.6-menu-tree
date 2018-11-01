@extends('layouts.app')

@section('content')
    {!! Menu::render() !!}
@endsection

{{--//YOU MUST HAVE JQUERY LOADED BEFORE menu scripts--}}
@push('scripts')
    {!! Menu::scripts() !!}
@endpush