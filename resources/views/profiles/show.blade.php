@extends('layouts.app')
@section('title','Profile')
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      @if($profile->profile_image)
        <img src="{{ asset('storage/' . $profile->profile_image) }}" class="img-fluid rounded-start" alt="Profile image">
      @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $profile->full_name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $profile->email }}</p>
        <p class="card-text"><strong>Phone:</strong> {{ $profile->phone }}</p>
        <p class="card-text"><strong>Address:</strong> {{ $profile->address }}</p>
        <p class="card-text"><strong>Bio:</strong> {{ $profile->bio }}</p>
        <p class="card-text"><strong>Hobbies:</strong> {{ $profile->hobbies }}</p>
        <p class="card-text"><strong>Date of birth:</strong> {{ $profile->date_of_birth->format('Y-m-d') }}</p>
        <p class="card-text"><small class="text-muted">Submitted: {{ $profile->created_at->diffForHumans() }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection
