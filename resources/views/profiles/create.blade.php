@extends('layouts.app')
@section('title', 'Create Profile')
@section('content')
  <div class="row">
    <div class="col-md-8">
      <h2 class="text-center">Create Profile</h2>
      <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input class="form-control" name="full_name" value="{{ old('full_name') }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}"
            required>
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input class="form-control" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Address</label>
          <input class="form-control" name="address" value="{{ old('address') }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Bio</label>
          <textarea class="form-control" name="bio" rows="4" required>{{ old('bio') }}</textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Profile Image (jpg, png, max 2MB)</label>
          <input type="file" class="form-control" name="profile_image" accept="image/*" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Hobbies</label>
          <input class="form-control" name="hobbies" value="{{ old('hobbies') }}" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
        </div>

        <button class="btn btn-success" type="submit">Submit</button>
      </form>
    </div>
  </div>
@endsection