@extends('layouts.frontbase')

@section('title', 'Title from sub file')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar</p>
@endsection

@section('contenet')
    <p>This is my body cont.</p>
@endsection
