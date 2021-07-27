@extends('layouts.app')

@section('content')

<div class="container p-4">
    <div class="row">

        <!-- Alert -->
        <div class="d-grid">
            @include('notes.alert')
        </div>
        <div class="col-md-auto ms-auto">

            <a role="button" href="{{ route('notes.create') }}" class="btn btn-primary float-end">
                Create Note
            </a>
        </div>

    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-auto">
        @foreach($notes as $note)
        <div class="col">
            <div class="card shadow-sm">
                <!-- <h5 class="card-header">{{ $note->title }}</h5> -->
                <div class="card-body">
                    <h5 class="card-title"><a class="stretched-link" href="{{ route('notes.show', $note) }}">{{ $note->title }}</a></h5>
                    <p class="card-text">
                        {{ $note->content}}
                    </p>

                    <!-- <a href="{{ route('notes.show', $note) }}" class="stretched-link">See more</a> -->
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