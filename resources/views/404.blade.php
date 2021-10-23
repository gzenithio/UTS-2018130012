@extends('layout.master')

@section('title', '404 ERROR')

@section('content')

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        style="width:500px ; height:600px ;image-rendering: auto;image-rendering: crisp-edges;image-rendering: pixelated;img-fluid;flex-auto;d-none;d-md-block"
                        src="../img/psyduck.jpg"></div>
                <div class=" col-md-6">
                    <h3>
                        <div class="small mb-1 text-left" style="color:red">ERROR 404</div>
                    </h3>
                    <h1 class="display-5 fw-bolder text-left" style="color:red">Ther's no page you're looking for</h1>
                    <a class="btn bg-danger text-white" href="{{ route('home') }}" role="button">Go To Home</a>
                    <div class="fs-5 mb-5 text-left">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
