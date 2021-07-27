@extends('layouts.app')

@section('content')
<div class="container p-4">
    @include('notes.alert')
    <form action="{{ route('notes.update', $id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="modal-body">
            <div class="form-floating mb-3">
                <input class="form-control" name="title" id="title" type="text" placeholder="Title" value="{{ $title }}" autocomplete="off">
                <label for="title">Title</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="content" id="content" style="height: 200px;" placeholder="Content">{{ $content }}</textarea>
                <label for="content">Content</label>
            </div>
        </div>
        <div class="float-end m-1">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <form action="{{ route('notes.destroy', $id) }}" method="post">
        @method('DELETE')
        @csrf
        <div class="float-end m-1">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>

@endsection