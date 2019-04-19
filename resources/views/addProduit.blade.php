@extends('template')

@section('titre')
   AddProduit
@endsection

@section('contenu')
    {!! Form::open(['url' => 'produit/add']) !!}
        {!! Form::label('titre', 'Entrez le titre : ') !!}
        {!! Form::text('titre') !!}
        {!! Form::label('type', 'Entrez le type: ') !!}
        {!! Form::text('type') !!}
        {!! Form::label('auteur', 'Entrez auteur  : ') !!}
        {!! Form::text('auteur') !!}
        {!! Form::label('editeur', 'Entrez editeur : ') !!}
        {!! Form::text('editeur') !!}
        {!! Form::label('prix', 'Entrez le prix : ') !!}
        {!! Form::text('prix') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection