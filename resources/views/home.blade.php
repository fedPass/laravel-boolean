{{-- la view home estende il layout di main, cioè prende la sua struttura e definisci gli yield che sono definiti --}}
@extends('layouts.main')

{{-- per definire gli yield utilizziamo le section (che devono avere lo stesso nome delle yield per essere collegate) --}}
@section('content')
    <main>
        <section id="jumbo" class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Diventa <strong>sviluppatore web</strong></h1>
                    <strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong>
                    <ul>
                        <li>6 mesi di corso intensivo online in diretta</li>
                        <li>Nessuna competenza di programmazione richiesta</li>
                        <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img class="lozad" data-src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="Impara da casa tua" src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" data-loaded="true">
                </div>
            </div>
        </section>
        <section id="bool-data" class=" bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <strong>98%</strong>
                        <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
                    </div>
                    <div class="col">
                        <strong>€ 23.000</strong>
                        <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
                    </div>
                    <div class="col">
                        <strong>#1</strong>
                        <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="placement" class="bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Un dipartimento <em>placement</em> dedicato</h3>
                        <p>Finito il corso, il nostro compito è quello di offrirti un costante e attivo sostegno nella ricerca del lavoro.<br>A seconda della tua personalità e delle tue attitudini, ti presentiamo alle aziende che più si avvicinano alle tue esigenze, insegnandoti a utilizzare strumenti e metodi per rendere il tuo profilo accattivante per il mercato del lavoro.</p>
                    </div>
                    <div class="col-lg-6">
                        <img class="lozad" data-src="https://www.boolean.careers/images/homepage/studente.png" alt="Assistente" src="https://www.boolean.careers/images/homepage/studente.png" data-loaded="true">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
