@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="col-4">
        <div>
            <img src="https://picsum.photos/id/{{$project->id + 10}}/1920/1080" alt="">
            <div>{{$project->name}}</div>
            <div>{{$project->diff_lvl}}</div>
            <div><a href="{{route('admin.projects.show',$project->id)}}">{{$project->slug}}</a></div>
            <div>{{$project->dev_lang}}</div>
            <div>{{$project->framework}}</div>
            <div>{{$project->team}}</div>
            <div>{{$project->git_link}}</div>
            <div>{{$project->description}}</div>
        </div>
    </div>
</div>
@endsection
