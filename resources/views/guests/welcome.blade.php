@extends('layouts.app')

@section('content')
    <div class="jumbo-img">
        <div class="jumbo-top">
            <div class="d-flex flex-column text-center px-5">
                <h1 class="text-jumbo text-bold text-uppercase py-4">Welcome to Movies</h1>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia nulla nesciunt illum excepturi ipsum dicta est mollitia, vitae tempora saepe laboriosam ratione sit magni dolorem libero aliquam eligendi delectus magnam.
                Rerum, iste eius, sint culpa harum neque reprehenderit officiis dignissimos vitae corrupti totam eaque, dolore maxime eligendi doloribus autem! Blanditiis fugit eos earum repudiandae nobis rem consequuntur asperiores, animi non.
                Illo modi laudantium totam qui quae. Voluptas, iure! Fuga a dolores blanditiis, debitis tempore laboriosam qui hic facere esse suscipit. Amet error tempore ipsum voluptate quas sapiente expedita nulla quam!</p>
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
