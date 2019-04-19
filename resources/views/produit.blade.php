@extends('template')

@section('titre')
    Les articles
@endsection

@section('contenu')
    <p>C'est l'article n° {{ $numero }}</p>
    <div>
     <div class="row">
        <div class="col">{!! $details->titre !!}</div>
        <div class="col">{!! $details->auteur !!}</div>
        <div class="col">{!! $details->editeur !!}</div>
        <div class="col">{!! $details->prix !!}</div>
        <div class="col">{!! $details->type !!}</div>
      </div>
</div>
<div class="col"><a href="delete/{!! $details->id !!}">delete</a></div>
      </div>
@endsection