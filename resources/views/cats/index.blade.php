@extends('layouts.app')

@section('main')

<div class="mb-5 card border-0 shadow">
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active" aria-current="page">Cats</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">

    <div class="col-4">
        <h5>Cats Index</h5>
        <p class="text-muted">Index our cats here! And most probably, a create button also supposed to be here</p>
        <a href="{{ route('cats.create') }}" class="btn btn-dark">
            <span>Add a new cat</span>
        </a>
    </div>
    <div class="col-8">
        <div class="card border-0 shadow">
            <div class="card-body p-0" style="min-height: 15rem;">
                <table>
                    @forelse( $cats as $cat )
                    <tr>
                        <a href="/cats/{{ $cat->id }}/edit" class="btn btn-outline-dark border-0 d-flex">
                            {{ $cat->name }}
                        </a>
                    </tr>
                    @empty
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height:15rem;">
                        <p class="lead">
                            Our cat storage is empty!
                        </p>
                        <small class="text-muted">Go ahead and add a new one :)</small>
                    </div>
                    @endforelse
                </table>

            </div>
        </div>
    </div>

</div>

@endsection
