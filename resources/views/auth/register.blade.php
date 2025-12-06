@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 border shadow-lg p-4">
    <h2 class="text-center">Register</h2>
    <form method="POST" action="{{ route('register.post') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input required name="name" value="{{ old('name') }}" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input required type="email" name="email" value="{{ old('email') }}" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input required type="password" name="password" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input required type="password" name="password_confirmation" class="form-control">
      </div>
      <button class="btn btn-primary" type="submit">Register</button>
    </form>
  </div>
</div>
@endsection
