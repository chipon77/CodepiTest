@extends('template')

@section('titre')
   AddProduit
@endsection

@section('contenu')
    {!! Form::open(['url' => 'produit/add']) !!}
        {!! Form::label('titre', 'Entrez le titre : ') !!}
        {!! Form::text('titre','',array('class' => 'form-control')) !!}
        {!! Form::label('type', 'Entrez le type: ') !!}
        {!! Form::text('type','',array('class' => 'form-control')) !!}
        {!! Form::label('auteur', 'Entrez auteur  : ') !!}
        {!! Form::text('auteur','',array('class' => 'form-control')) !!}
        {!! Form::label('editeur', 'Entrez editeur : ') !!}
        {!! Form::text('editeur','',array('class' => 'form-control')) !!}
        {!! Form::label('prix', 'Entrez le prix : ') !!}
        {!! Form::text('prix','',array('class' => 'form-control')) !!}
        {!! Form::label('prix', 'choisissez une catégorie : ') !!}
        {!!Form::select('categorie', $lists,null,array('class'=>'form-control')) !!}
        {!! Form::submit('Envoyer !',array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
@endsection