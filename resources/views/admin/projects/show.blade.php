@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        {{-- <img src="{{ asset('storage/' . $post->cover_image) }}"> --}}
    </div>
@endsection
