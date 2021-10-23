<div class="card ml-4 mb-4" style="border: 1px solid blue ; float:none ; margin-left:2px ; margin-right:2px">
    <a href="/detail/{{ $id }}" class="text-dark">
        <div class="card-block badge bg-dark text-white position-absolute"
            style="float:none ; top: 0.5rem; left: 0.5rem"># {{ $id }}
        </div>
        <img class="card-img-top;flex-auto" src="../img/{{ $img }}" alt="{{ $name }}"
            style="width: 150px; height: 200px; image-rendering: auto;image-rendering: crisp-edges;image-rendering: pixelated;img-fluid;flex-auto;d-none;d-md-block">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $name }}</h5>
            {{ $type }}
        </div>
    </a>
</div>
