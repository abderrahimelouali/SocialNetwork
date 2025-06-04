@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <h1>Welcome to home page</h1>
    <x-users-table :users="$users" />
@endsection
