@extends('admin.layouts.master')

@section('content')

    @include('admin.partials.sidebar')
    @include('admin.partials.header')
    @include('admin.partials.information')
    @include('admin.partials.dynamic-content-create-users')

@endsection('content')
