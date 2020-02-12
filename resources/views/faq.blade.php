{{-- la view home estende il layout di main, cioè prende la sua struttura e definisci gli yield che sono definiti --}}
@extends('layouts.main')

{{-- per definire gli yield utilizziamo le section (che devono avere lo stesso nome delle yield per essere collegate) --}}
@section('content')
    <main>
        <section id="faq" class="container-fluid">
            <div class="row">
                <h1>Domande frequenti</h1>
                <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
            </div>
            <div class="row">
                <div class="col">

                </div>
                <div class="col">

                </div>
            </div>
        </section>

    </main>
@endsection
