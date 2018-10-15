@extends('layouts.main.main')

@section('title')
    De organisatie
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/organisation/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>De organisatie</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">
            Op deze pagina zou het mooi zijn wanneer er een stukje geschreven staat over de organisatie.
            Te denken valt aan:
            <ul>
                <li>Geschiedenis</li>
                <li>Hoe is het nu</li>
                <li>Hoe zien we de toekomst</li>
                <li>Voor wie doen we dit</li>
                <li>Met wie doen we dit</li>
            </ul>

            Dit is misschien ook een mooi plaats om iets extra's over de vrijwilligers te schrijven.
        </div>
    </div>
    {{-- End content--}}

@endsection

