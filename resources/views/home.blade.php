{{-- la view home estende il layout di main, cioè prende la sua struttura e definisci gli yield che sono definiti --}}
@extends('layouts.main')

{{-- per definire gli yield utilizziamo le section (che devono avere lo stesso nome delle yield per essere collegate) --}}
@section('content')
    <h1>Diventa <strong>sviluppatore web</strong></h1>
@endsection
