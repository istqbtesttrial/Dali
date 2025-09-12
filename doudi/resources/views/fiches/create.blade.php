@extends('layouts.app')

@section('content')
<div class="page-leftheader">
    <h4 class="page-title mb-0 text-primary">Ajouter un stagiaire</h4>
</div>
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary buttons-copy buttons-html5" href = "{{route('stagiaires')}}">Liste des stagiaires</a>
    </div>
    <div class="card-body pb-2">
        <form class="" action="{{route('stagiaire.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Nom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le nom de stagiaire"   name="nom">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Prenom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le prénom de stagiaire" name="prenom">
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Email <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer l'email de stagiaire "   name="email">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">L'institut <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer l'institut de stagiaire" name="institut">
            </div>
          </div>
          
          <div class="form-group">
                <label for="exampleFormControlInput1">Photo</label>
                <input type="file" class="form-control" name="image">
              </div>
          <div class="form-group">
           <button class="btn btn-pill btn-primary" type="submit">Enregister</button>
           </div>
        </form>
    </div>
</div>



@endsection