@extends('layouts.app')

@section('content')

<div class="container p-4">
    <div class="row">
        <div class="col-md-auto ms-auto my-4">
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createNoteModal">
                Create Note
            </button>

            <!-- Create Modal -->
            <div class="modal fade" id="createNoteModal" tabindex="-1" aria-labelledby="createNoteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createNoteLabel">Create Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="{{ route('notes.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="title" id="title" type="text" placeholder="Title">
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="content" id="content" style="height: 200px;" placeholder="Content"></textarea>
                                    <label for="content">Content</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Create Modal -->
        </div>

    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($notes as $note)
        <div class="col">
            <div class="card shadow-sm">
                <h5 class="card-header">{{ $note->title }}</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">{{ $note->title }}</h5> -->
                    <p class="card-text overflow-hidden">
                        {{ $note->content}}
                    </p>

                    <a href="{{ route('notes.show', $note->id) }}" class="stretched-link">See more</a>
                </div>
                <div class="card-footer text-muted small text-end">
                    Modified at {{ $note->updated_at->format('M j, Y H:i:s A') }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
