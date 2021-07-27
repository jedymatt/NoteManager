@extends('layouts.app')

@section('content')

<div class="container p-4">
    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input class="form-control" name="title" id="title" type="text" placeholder="Title" autocomplete="off">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="content" id="content" style="height: 200px;" placeholder="Content"></textarea>
            <label for="content">Content</label>
        </div>
        <div class="float-end m-1">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>

@endsection