@extends('template')

@section('titre')
   AddProduit
@endsection

@section('contenu')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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