@extends('layout.master')

@section('title', 'Home')

@section('navigation')

    <div class="row justify-content-center mt-4">
        <div class="col-md-11">
            <form action="/home/search">
                <div class="input-group mb-2" method="GET" role="search">
                    <input type="text" class="form-control" id="poke" placeholder="Search Pokemons . . ." name="cari"
                        value="{{ request('cari') }}" style="border: 1px solid blue">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="submit"
                            style="background-color: rgb(252, 15, 15); color: white; padding: 0 70px ; border:1px solid blue ">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn-warning" style="width: 45% ; margin-top:10px ; margin-right: 5px" type="button"
            href="{{ route('random') }}">
            Surprize Me!
        </a>
        <button class="btn btn-primary dropdown-toggle" style="width: 45% ; margin-top:10px ; margin-left: 5px" type="button"
            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Order By
        </button>
        <div class="dropdown-menu" style="width: 45%" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('low') }}">Lowest Number</a>
            <a class="dropdown-item" href="{{ route('high') }}">Highest Number</a>
            <a class="dropdown-item" href="{{ route('az') }}">A-Z</a>
            <a class="dropdown-item" href="{{ route('za') }}">Z-A</a>
        </div>
    </div>

@endsection
@section('content')
    <div class="container d-flex flex-column" style="margin-top: 20px">
        <div class="row row-cols-6 mt-2 justify-content-center">
            @forelse ($res as $poke )
                @component('components.cardview')
                    @slot('id')
                        @php
                            $id = sprintf('%03d', $poke['id']);
                        @endphp
                        {{ $id }}
                    @endslot

                    @slot('img')
                        {{ $poke['image'] }}
                    @endslot

                    @slot('name')
                        {{ $poke['name'] }}
                    @endslot

                    @slot('type')
                        @php
                            $decode = json_decode($poke['types']);
                        @endphp
                        @for ($i = 0; $i < count($decode); $i++)
                            <p class="badge bg-dark text-white text-center">{{ $decode[$i] }}</p>
                        @endfor
                    @endslot
                @endcomponent


            @empty

                <div class="col-md-12 my-1">
                    <div class="card">
                        <div class="card-body">
                            Pokemon Not Found!
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
    </div>

@endsection
