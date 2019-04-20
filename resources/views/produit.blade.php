@extends('template')

@section('titre')
    Les articles
@endsection

@section('contenu')
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
    
<div class="col"><a href="#" id="edit">modifier le produit</a></div>
     
<div class="col"><a href="#" data-toggle="modal" data-target="#liecategorie">lier à une catégorie</a></div>


        <div id="formEdit" style="visibility: hidden">
        	    {!! Form::open(['url' => "produit/edit/$details->id"]) !!}

          {!! Form::label('titre', 'Entrez le titre : ') !!}
          {!! Form::text('titre',$details->titre) !!}

          {!! Form::label('type', 'Entrez le type: ') !!}
          {!! Form::text('type',$details->type) !!}

          {!! Form::label('auteur', 'Entrez auteur  : ') !!}
          {!! Form::text('auteur',$details->auteur) !!}

          {!! Form::label('editeur', 'Entrez editeur : ') !!}
          {!! Form::text('editeur',$details->editeur) !!}

          {!! Form::label('prix', 'Entrez le prix : ') !!}
          {!! Form::text('prix',$details->prix) !!}

          {!! Form::submit('Envoyer !') !!}
      {!! Form::close() !!}

        </div>

  <div class="modal fade" id="liecategorie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout catégorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
    {!! Form::open(['url' => 'produit/lier']) !!}
       {!!Form::select('id_categorie', $lists,null) !!}
 
    {!! Form::text('id_product',$details->id,array('style' => 'visibility: hidden')) !!}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         {!! Form::submit('Envoyer !' , array('class' => 'btn btn-primary')) !!}
      </div>
    </div>
  </div>
   {!! Form::close() !!}
</div>


      <script type="text/javascript">
      	  $("#edit").click(function(){
    		$("#formEdit").css("visibility","visible");
  });

      </script>
@endsection