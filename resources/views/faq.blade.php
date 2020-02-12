{{-- la view home estende il layout di main, cioè prende la sua struttura e definisci gli yield che sono definiti --}}
@extends('layouts.main')

{{-- per definire gli yield utilizziamo le section (che devono avere lo stesso nome delle yield per essere collegate) --}}
@section('content')
    <main>
        <section id="faq">
            <div class="container-fluid">
                <div class="row faq-top">
                    <h1>Domande frequenti</h1>
                    <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 bg-grey faq-list">
                        <h2>Prima del corso</h2>
                        {{-- {{ dd($lista_faq_dx) }} --}}
                        @foreach ($lista_faq_dx as $faq)
                            <div class="faq">
                                <h3 class="faq-preview">{{$faq['domanda']}}<i class="fas fa-plus float-right"></i></h3>
                                <p>{{$faq['risposta']}}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 bg-blue faq-list">
                        <h2>Dopo il corso</h2>
                        {{-- {{ dd($lista_faq_sx) }} --}}
                        @foreach ($lista_faq_sx as $faq)
                            <div class="faq">
                                <h3 class="faq-preview">{{$faq['domanda']}}<i class="fas fa-plus float-right"></i></h3>
                                <p>{{$faq['risposta']}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
