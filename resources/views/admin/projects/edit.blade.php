@extends('layouts.admin')

@section('content')
    <h1>Edit Project: {{ $project->name }}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data"
                class="p-4">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name', $project->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $project->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="dev_lang" class="form-label">Linguaggi</label>
                    <input type="text" class="form-control @error('dev_lang') is-invalid @enderror" id="dev_lang"
                        name="dev_lang" value="{{ old('dev_lang', $project->dev_lang) }}">
                    @error('dev_lang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="framework" class="form-label">Framework</label>
                    <input type="text" class="form-control @error('dev_framework') is-invalid @enderror" id="framework"
                        name="framework" value="{{ old('framework', $project->framework) }}">
                    @error('framework')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="diff_lvl" class="form-label">Livello di difficoltà</label>
                    <input type="text" class="form-control @error('diff_lvl') is-invalid @enderror" id="diff_lvl"
                        name="diff_lvl" value="{{ old('diff_lvl"', $project->diff_lvl) }}">
                    @error('diff_lvl')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="team" class="form-label">Team</label>
                    <input type="text" class="form-control @error('team') is-invalid @enderror" id="team"
                        name="team" value="{{ old('team"', $project->team) }}">
                    @error('team')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link_git" class="form-label">Link Git</label>
                    <input type="text" class="form-control @error('link_git') is-invalid @enderror" id="link_git"
                        name="link_git" value="{{ old('link_git', $project->link_git) }}">
                    @error('link_git')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="d-flex">
                    <div class="media me-4">
                        <img class="shadow" width="150" src="{{ asset('storage/' . $project->cover_image) }}"
                            alt="{{ $project->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Replace project image</label>
                        <input type="file" name="cover_image" id="cover_image"
                            class="form-control  @error('cover_image') is-invalid @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <button class="btn btn-primary"><a
                href="{{ route('admin.projects.index') }}"style="color:white">Indietro</a></button>
        </form>
        </form>
    </div>
    </div>
@endsection
