@extends('template')

@section('titre')
    Hello, world!
@endsection

@section('contenu')


<div class="container" style="margin-top:10px">
    <div class="row">
@foreach ($livres as $livre)
@if ($livre->affichage === 1)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="card-text">
                        
        <div class="col"><h1 style="margin-left:auto;" align="center">{!! $livre->titre !!}</h1></div>
        <div class="col" style="margin-top:10px"><h4 style="margin-left:auto;" align="center">{!! $livre->auteur !!}</h4></div>
        <div class="col"><a href="{{route('details',['n' => $livre->id])}}" class="btn btn-primary">voir detail</a></div>
                    </div>
                </div>
            </div>
        </div>

        @endif
@endforeach
    </div>
    
{{ $livres->links() }}





</div>

@endsection