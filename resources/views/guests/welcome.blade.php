@extends('layouts.app')

@section('content')
    <section>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 d-flex gap-5  ">
                @forelse ($Movies as $Movie)
                    <div class="card ">
                        <div class="card-title">
                            {{ $Movie['title'] }}
                        </div>
                        <div class="card-body bg-secondary text-white">
                            <ul class="list-unstyled">
                                <li> {{ $Movie['nationality'] }}</li>
                                <li>{{ $Movie['date'] }}</li>
                                <li> {{ $Movie['vote'] }}</li>

                            </ul>

                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>Movie not found, sorry</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
