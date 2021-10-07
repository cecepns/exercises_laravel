@extends('template')

@section('content')

<section class="quiz">
    <div class="row mt-5 mb-5">
        <h1 id="count-down" class="w-100 text-center text-w"> -- : -- </h1>
    </div>

    @foreach ($soals as $soal)

    <div class="question-wrapper">
        <div class="number font-weight-bold h2">
        {{ $loop->iteration }}
        </div>
        <div class="question">
           {{ $soal->soal }}
        </div>
    </div>

    <div class="question-answer mt-5">
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="aswer-option font-weight-bold pr-3">
                            A.
                        </div>
                        <div class="answer-desc">
                            {{ $soal->pilihan_a }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="aswer-option font-weight-bold pr-3">
                            B.
                        </div>
                        <div class="answer-desc">
                             {{ $soal->pilihan_b }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="aswer-option font-weight-bold pr-3">
                            C.
                        </div>
                        <div class="answer-desc">
                        {{ $soal->pilihan_c }}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="aswer-option font-weight-bold pr-3">
                            D.
                        </div>
                        <div class="answer-desc">
                        {{ $soal->pilihan_d }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</section>


<script>

function startTimer(duration, display) {
    let timer = duration, minutes, seconds;
    let interval = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
                clearInterval(interval)
                
            }
         }, 1000);
}

window.onload = () => {
    let fiveMinutes = 60 * 1,
        display = document.querySelector('#count-down');
    startTimer(fiveMinutes, display);
};

</script>

@endsection
