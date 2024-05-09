@extends('layouts.app')

@section('content')
    <div class="row align-items-md-stretch">
        <div class="h-100 p-5 text-white bg-dark text-center">
            <h2 class="text-danger">WELCOME TO MOVIES LIST</h2>
            <p class="py-4">
                Swap the background-color utility and add a `.text-*` color
                utility to mix up the jumbotron look. Then, mix and match with
                additional component themes and more.
            </p>
            <div class="d-flex justify-content-center gap-4">
                <button class="btn btn-outline-success" type="button">
                    Register
                </button>
                <button class="btn btn-outline-primary" type="button">
                    Sign In
                </button>
            </div>
        </div>
    </div>

    <section class="bg-dark">
        <div class="container py-5">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="card-title">{{ $movie->title }}</h4>
                                    <h6 class="card-subtitle text-muted">{{ $movie->original_title }}</h6>
                                </div>
                                <p class="card-text">{{ $movie->nationality }}</p>
                                <p class="card-text">{{ $movie->date }}</p>
                                <p class="card-text">{{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
