@extends('layouts.admin')

@section('content')
    <h1>Projects</h1>
    <a class="btn btn-success" href="{{ route('admin.types.create') }}">Crea nuovo post</a>
    @if (session()->has('message'))
        <div class="alert alert-success mb-3 mt-3">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Languages</th>
                <th scope="col">Framework</th>
                <th scope="col">Team</th>
                <th scope="col">Link Git</th>
                <th scope="col">Difficulty</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td><a href="{{ route('admin.types.show', $type->slug) }}" title="View Post">{{ $type->name }}</a>
                    </td>
                    <td>{{ Str::limit($type->description, 100) }}</td>
                    <td>{{ $type->dev_lang }}</td>
                    <td>{{ $type->framework }}</td>
                    <td>{{ $type->team }}</td>
                    <td>{{ $type->link_git }}</td>
                    <td>{{ $type->diff_lvl }}</td>
                    <td><a class="link-secondary" href="{{ route('admin.types.edit', $type->slug) }}" title="Edit Post"><i
                                class="pt-2 fa-solid fa-pen"></i></a></td>
                    <td>
                        <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3"
                                data-item-title="{{ $type->name_type }}"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials.admin.modal-delete')
@endsection
