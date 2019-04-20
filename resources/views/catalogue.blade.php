@extends('template')

@section('titre')
    Hello, world!
@endsection

@section('contenu')
<div class="container">

    <div class="col align-self-center">Catalogue</div>

</div>

@foreach ($livres as $livre)
@if ($livre->affichage === 1)
<div>
     <div class="row">
        <div class="col">{!! $livre->titre !!}</div>
        <div class="col">{!! $livre->auteur !!}</div>
        <div class="col">{!! $livre->editeur !!}</div>
        <div class="col">{!! $livre->prix !!}</div>
        <div class="col">{!! $livre->type !!}</div>
        <div class="col"><a href="{{route('details',['n' => $livre->id])}}">voir detail</a></div>
      </div>
</div>
@endif
@endforeach

@endsection