@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<h1>Welcome, {{ auth()->user()->name }}</h1>
<p>Use the navigation to create and view profiles.</p>
@endsection
