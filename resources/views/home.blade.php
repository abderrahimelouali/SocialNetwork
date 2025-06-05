@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <h1>Welcome to home page</h1>
    <x-users-table :users="$users" />
    {{-- it is not recommened to use slots, use props instead --}}
    <x-alert color="warning">warning alert</x-alert>
    <x-alert color="primary">primary alert</x-alert>
    <x-alert color="danger">danger alert</x-alert>
    <x-alert color="success">success alert</x-alert>
@endsection
