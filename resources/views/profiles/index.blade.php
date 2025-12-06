@extends('layouts.app')
@section('title','Profiles')
@section('content')
<h2 class="text-center">All Profiles</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Image</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($profiles as $profile)
      <tr>
        <td>
          @if($profile->profile_image)
            <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="" style="width:64px;height:64px;object-fit:cover;border-radius:4px;">
          @endif
        </td>
        <td>{{ $profile->full_name }}</td>
        <td>{{ $profile->email }}</td>
        <td>{{ $profile->phone }}</td>
        <td>
          <a class="btn btn-sm btn-primary" href="{{ route('profiles.show', $profile) }}">View</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $profiles->links() }}
@endsection
