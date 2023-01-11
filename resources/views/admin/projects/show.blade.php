@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="container card-box">
                    <img class="my-img" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
                    <div>{{ $project->name }}</div>
                    <div>{{ $project->diff_lvl }}</div>
                    <div>{{ $project->slug }}</div>
                    <div>{{ $project->dev_lang }}</div>
                    <div>{{ $project->framework }}</div>
                    <div>{{ $project->team }}</div>
                    <div>{{ $project->git_link }}</div>
                    <div>{{ $project->description }}</div>
                </div>
                <button class="btn btn-primary mt-3"><a
                        href="{{ route('admin.projects.index') }}"style="color:white">Indietro</a></button>
            </div>
        </div>
    </div>
@endsection
