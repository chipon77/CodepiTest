@extends('template')

@section('titre')
   Détails
@endsection

@section('contenu')


<div class="container">
   {!! Form::open(['url' => "produit/edit/$details->id"]) !!}
  <h1>
    <div  style="display: inline-block" class="base">{!! $details->titre !!} </div>
    <div  style="display: inline-block">{!! Form::text('titre',$details->titre,array('style' => 'visibility:hidden', 'class'=> 'modify form-control')) !!}</div>
  </h1> 

  <div class="my-3 p-3 bg-white rounded box-shadow">   
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="font-size: 20px">
         <div style="display: inline-block">Auteur : </div> 
         <div class="base" style="display: inline-block">{!! $details->auteur !!}</div>
         {!! Form::text('auteur',$details->auteur,array('style' => 'visibility:hidden', 'class'=> 'modify ')) !!}
      </div>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="font-size: 20px">
        <div style="display: inline-block">Editeur :</div>
        <div class="base" style="display: inline-block">{!! $details->editeur !!}</div>
          {!! Form::text('editeur',$details->editeur,array('style' => 'visibility:hidden', 'class'=> 'modify')) !!}
      </div>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"style="font-size: 20px">
         <div style="display: inline-block">Prix :</div>
         <div class="base" style="display: inline-block">{!! $details->prix !!} € </div>
            {!! Form::text('prix',$details->prix,array('style' => 'visibility:hidden', 'class'=> 'modify')) !!}
      </div>
    </div>
  </div>

    <div class="my-3 p-3 bg-white rounded box-shadow">
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="font-size: 20px">
         <div style="display: inline-block">Type : </div>
         <div class="base" style="display: inline-block">{!! $details->type !!}</div>
         {!! Form::text('type',$details->type,array('style' => 'visibility:hidden', 'class'=> 'modify')) !!}
      </div>
    </div>

     <div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="font-size: 20px">
         <div style="display: inline-block">Catégories :</div>
        <div class="base" style="display: inline-block">
        @foreach($listcategorie as $categorie)
          {!! $categorie->nom !!}
        @endforeach
      </div>
      </div>
    </div>
  </div>
  </div>
  {!! Form::submit('Envoyer !',array('style' => 'visibility:hidden', 'class'=> 'modify btn btn-primary')) !!}
{!! Form::close() !!}
</div>


<div class="row">
<div class="col-md-4"><a href="delete/{!! $details->id !!}" class="btn btn-primary">Supprimer</a></div>
    
<div class="col-md-4"><a href="#" id="edit" class="btn btn-primary">Modifier le produit</a></div>
     
<div class="col-md-4"><a href="#" data-toggle="modal" data-target="#liecategorie" class="btn btn-primary">Lier à une catégorie</a></div>
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
       {!!Form::select('id_categorie', $lists,null,array('class'=>'form-control')) !!}
 
    {!! Form::text('id_product',$details->id,array('style' => 'visibility: hidden')) !!}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         {!! Form::submit('Envoyer !' , array('class' => 'btn btn-primary')) !!}
      </div>
    </div>
  </div>
   {!! Form::close() !!}
</div>


      <script type="text/javascript">//javascript pour faire apparaitre les inputs pour changer les information du produits
      	  $("#edit").click(function(){
  
    		$(".modify").css("visibility","visible");
        $(".base").hide();
  });

      </script>
@endsection