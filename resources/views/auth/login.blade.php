@extends('layouts.app')
@section('title', 'Login')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6 p-3 border shadow-lg">
      <h2 class="text-center">Login</h2>
      <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input required type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input required type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" name="remember" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>
    </div>
  </div>
@endsection