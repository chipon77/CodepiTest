<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
      <!-- Bootstrap  -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Catalogue</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href={{route('add')}}>Ajout Produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#ajoutcategorie">Ajout catégorie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modifiercategorie">Modifier catégorie</a>
      </li>
    </ul>
  </div>
</nav>


	@yield('contenu')

  <div class="modal fade" id="ajoutcategorie" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Ajout catégorie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        {!! Form::open(['url' => 'categorie/add']) !!}
            {!! Form::label('nom', 'Entrez le nom de la catégorie : ') !!}
            {!! Form::text('nom','',array('class' => 'form-control')) !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           {!! Form::submit('Envoyer !' , array('class' => 'btn btn-primary')) !!}
        </div>
      </div>
    </div>
   {!! Form::close() !!}
</div>

  <div class="modal fade" id="modifiercategorie" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >modifier catégorie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      {!! Form::open(['url' => 'categorie/edit']) !!}  
       {!! Form::label('nom', 'Selectionner  une catégorie puis changer le nom : ') !!}
      {!!Form::select('id_categorie', $lists,null,array('class'=>'form-control','id' => 'editcategorie')) !!}
      {!! Form::text('categorie_nom','',array('class' => 'form-control','id' => 'newname','style'=> 'margin-top :10px')) !!}              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           {!! Form::submit('Envoyer !' , array('class' => 'btn btn-primary')) !!}
        </div>
      </div>
    </div>
   {!! Form::close() !!}
  </div>

      <script type="text/javascript">//javascript pour pré-remplir l'input avec le nom de la catégorie à modifier
          $("#editcategorie").change(function(){
                $("#newname").val($("#editcategorie option:selected").text());
          });


      </script>
</body>
</html>