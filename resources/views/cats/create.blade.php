@extends('layouts.app')

@section('main')

<div class="mb-5 card border-0 shadow">
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active" aria-current="page"><a class="text-decoration-none" href="{{ route('cats.index') }}">Cats</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <h5>Cats Creation</h5>
        <p class="text-muted">This is where form is shown, to create cats, of course...</p>
    </div>
    <div class="col-8">
        <div class="card border-0 shadow">
            <div class="card-body">
                <form method="POST" action="/cats">

                    @csrf

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="name">Name</label>
                        <input id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="breed">Breed</label>
                        <input id="breed" name="breed" class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <label class="mb-1 text-muted" for="age">Age</label>
                        <input id="age" name="age" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-dark">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
