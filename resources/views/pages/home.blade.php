@extends('layouts.app')

@section('content')
    <x-ui.hero />
    <x-ui.problem-nutzen />
    <x-ui.social-proof />
    <h1>Welcome to {{ config('app.name', 'Base') }}</h1>
    <p>This is the home page.</p>
@endsection
