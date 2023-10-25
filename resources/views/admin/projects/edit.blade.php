@extends('layouts.app')

@section('content')
<h1 class="mt-2 text-center">Modifica Progetto</h1>
<div class="container my-2 d-flex justify-content-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <h4>Correggi i seguenti errori</h4>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('admin.projects.update', $project)}}" method="POST" class="row">
        @csrf
        @method('PUT')
        <div class="col-4">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title') ?? $project->title}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-4">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{old('description') ?? $project->description}}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-4">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" name="url" id="url" value="{{old('url') ?? $project->url}}">
            @error('url')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button class="btn btn-success my-2">Salva</button>
        <a class="btn btn-primary" href="{{route('admin.projects.index')}}">Torna alla home page</a>
    </form>
</div>
@endsection