@extends('layout.master')

@section('title', 'Details')

@section('content')
    <div class="container">
        <div class="row row-cols-1 mt-auto justify-content-center">
            @forelse ($pokemons as $poke)
                @section('navigation')
                    @component('components.rednav')


                        @slot('next')
                            @if ($poke->id != 151)
                                {{ $poke->id + 1 }}
                            @else
                                {{ $poke->id == 151 }}
                            @endif
                        @endslot

                        @slot('prev')
                            @if ($poke->id == 1)
                                {{ $allpokemons[150]->id }}
                            @else
                                {{ $poke->id - 1 }}
                            @endif
                        @endslot

                        @slot('nama')
                            @if ($poke->id >= 1 && $poke->id <= 150)
                                #{{ str_pad($allpokemons[$poke->id + 0]->id, 3, '0', STR_PAD_LEFT) }}
                            {{ $allpokemons[$poke->id + 0]->name }} @else
                                #{{ str_pad($allpokemons[0]->id, 3, '0', STR_PAD_LEFT) }}
                                {{ $allpokemons[0]->name }} @endif @endslot @slot('namaprev') @if ($poke->id == 1)
                                    #{{ str_pad($allpokemons[150]->id, 3, '0', STR_PAD_LEFT) }}
                                    {{ $allpokemons[150]->name }}
                                @else
                                    #{{ str_pad($allpokemons[$poke->id - 2]->id, 3, '0', STR_PAD_LEFT) }}
                                    {{ $allpokemons[$poke->id - 2]->name }}
                                @endif
                            @endslot
                        @endcomponent
                    @endsection
                    @component('components.carddetail')
                        @slot('id')
                            @php
                                $id = sprintf('%03d', $poke->id);
                            @endphp
                            {{ $id }}
                        @endslot

                        @slot('img')
                            {{ $poke->image }}
                        @endslot

                        @slot('name')
                            {{ $poke->name }}
                        @endslot

                        @slot('ability')
                            @php
                                $decode = json_decode($poke->abilities);
                            @endphp
                            @for ($i = 0; $i < count($decode); $i++)
                                <p class="badge bg-dark text-white text-center">{{ $decode[$i] }}</p>
                            @endfor
                        @endslot

                        @slot('height')
                            @php
                                $a = sprintf('%1.2f', $poke->height);
                            @endphp
                            {{ $a }}
                        @endslot

                        @slot('weight')
                            {{ $poke->weight }}
                        @endslot

                        @slot('m')
                            @php
                                $hit = $poke->height / 0.3048;
                                $fix = round($hit, 2);
                            @endphp
                            {{ $fix }}
                        @endslot

                        @slot('kg')
                            @php
                                $hit = $poke->weight / 0.453592;
                                $fix = round($hit, 2);
                            @endphp
                            {{ $fix }}
                        @endslot

                        @slot('species')
                            {{ $poke->species }}
                        @endslot

                        @slot('type')
                            @php
                                $decode = json_decode($poke->types);
                            @endphp
                            @for ($i = 0; $i < count($decode); $i++)
                                <p class="badge bg-dark text-white text-center">
                                    {{ $decode[$i] }}</p>
                            @endfor
                        @endslot

                        @slot('hp')
                            {{ $poke->hp }}
                        @endslot

                        @slot('attack')
                            {{ $poke->attack }}
                        @endslot

                        @slot('defense')
                            {{ $poke->defense }}
                        @endslot

                        @slot('spattack')
                            {{ $poke->sp_attack }}
                        @endslot

                        @slot('spdefense')
                            {{ $poke->sp_defense }}
                        @endslot

                        @slot('speed')
                            {{ $poke->speed }}
                        @endslot

                        @slot('card')
                            @php
                                $c = json_decode($poke->evolutions);
                            @endphp
                            @forelse ($c as $evo)
                                <div class="mt-3 d-flex align-items-stretch justify-content-center">
                                    <div class="card col d-flex justify-content-center text-center" style="border: 1px solid blue">
                                        <a href="/detail/{{ $allpokemons[$evo - 1]->id }}">
                                            <div class="card-body">
                                                <span class="badge badge-pill badge-secondary  position-absolute "
                                                    style="top: 0.5rem; left: 0.5rem">
                                                    # {{ str_pad($allpokemons[$evo - 1]->id, 3, '0', STR_PAD_LEFT) }}
                                                </span>
                                                <img class="img-fluid  flex-auto d-none d-md-block"
                                                    src="/img/{{ $allpokemons[$evo - 1]->image }}" alt="Responsive image"
                                                    style="width: 200px; height: 250px;image-rendering: auto;image-rendering: crisp-edges;image-rendering: pixelated;img-fluid;flex-auto;d-none;d-md-block">
                                                <h4 class="card-title">{{ $allpokemons[$evo - 1]->name }}
                                                </h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="mt-3 d-flex align-items-stretch justify-content-center">
                                    <div class="card ml-4 mb-4 justify-content-center text-center">
                                        <h1 class="text-center" style="color:black">EVOLUTION</h1>
                                        <h2>No Evolution For This Card</h2>
                                    </div>
                                </div>
                            @endforelse
                        @endslot
                    @endcomponent

                    @empty
                        <div class="col-md-12 my-1">
                            <div class="card">
                                <div class="card-body">
                                    No Data Found!
                                </div>
                            </div>
                        </div>
                    @endforelse
            </div>
        </div>
    @endsection
