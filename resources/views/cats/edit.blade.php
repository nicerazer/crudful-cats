@extends('layouts.app')

@section('main')

<div class="mb-5 card border-0 shadow">
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active" aria-current="page"><a class="text-decoration-none" href="{{ route('cats.index') }}">Cats</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mb-5">
    <div class="col-4">
        <h5>Edit the cat</h5>
        <p class="text-muted">The only and one page to modify or edit or.... whatever, with, any cats</p>
    </div>
    <div class="col-8">
        <div class="card border-0 shadow">
            <div class="card-body">
                <form method="POST" action="/cats/{{ $cat->id }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="name">Name</label>
                        <input id="name" value="{{ $cat->name }}" name="name" class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="breed">Breed</label>
                        <input id="breed" value="{{ $cat->breed }}" name="breed" class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="age">Age</label>
                        <input id="age" value="{{ $cat->age }}" name="age" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-dark">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-bottom: 15rem;">
    <div class="col-4">
        <h5>Delete this cat</h5>
        <p class="text-muted">Oh no, the cat would go non existent! Please be careful with your ultimate decision!</p>
    </div>

    <div class="col-8">
        {{-- Delete Form --}}
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <span class="text-muted p-0">Do the ultimate decision</span>
                    <form method="POST" action="/cats/{{ $cat->id }}">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Delete</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
