<section class="py-2">
    <div class="container px-4 px-lg-2 my-2">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../img/{{ $img }}"
                    alt="{{ $name }}"
                    style="width: 450px; height: 500px;image-rendering: auto;image-rendering: crisp-edges;image-rendering: pixelated;img-fluid;flex-auto;d-none;d-md-block">
            </div>
            <div class="col-md-6">
                <h3>
                    <div class="small mb-1 text-left"><b># {{ $id }}</b></div>
                </h3>
                <h1 class="display-5 fw-bolder text-left">{{ $name }}</h1>
                <div class="fs-5 mb-5 text-left">
                    <h4><span class="text-decoration-line-through">Abilities</span></h4>
                    <p>
                    <h5><span>{{ $ability }}</span></h5>
                    </p>
                    <p>
                    <h5><span>Profile</span></h5>
                    </p>
                    <table class="table" style="width: 90%">
                        <tbody>
                            <tr>
                                <td><b>Height&emsp;</b>{{ $m }} ft. ({{ $height }} m)</td>
                                <td><b>Weight&emsp;</b>{{ $kg }} lbs ({{ $weight }} kg)</td>
                            </tr>
                            <tr>
                                <td><b>Species&emsp;</b>{{ $species }}</td>
                                <td><b>Types&emsp;</b>{{ $type }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                    <h5><span>Stats</span></h5>
                    </p>
                    <table class="table" style="width: 40%">
                        <tbody>
                            <tr>
                                <td><b>HP&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                        style="width:{{ $hp }}%" aria-valuenow="{{ $hp }}"
                                        aria-valuemin="0" aria-valuemax="500">
                                        {{ $hp }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Attack&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        style="width: {{ $attack }}%" aria-valuenow="{{ $attack }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $attack }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Defense&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                        style="width:{{ $defense }}%" aria-valuenow="{{ $defense }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $defense }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Sp. Attack&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                        style="width:{{ $spattack }}%" aria-valuenow="{{ $spattack }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $spattack }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Sp. Defense&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                        style="width:{{ $spdefense }}%" aria-valuenow="{{ $spdefense }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $spdefense }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Speed&emsp;</b>
                                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar"
                                        style="width:{{ $speed }}%" aria-valuenow="{{ $speed }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        {{ $speed }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <h2>
            <b>EVOLUSION CARD</b>
        </h2>
        <div class="card-deck justify-content-center">
            {{ $card }}
        </div>
    </div>
    </div>
</section>
