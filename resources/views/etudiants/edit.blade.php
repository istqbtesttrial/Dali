@extends('layouts.app1')

@section('content')
<div class="page-leftheader">
    <h4 class="page-title mb-0 text-primary">Modifier les informations de stagiaire</h4>
</div>
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary buttons-copy buttons-html5" href = "{{route('stagiaires')}}">Tout les stagiaires</a>
    </div>
    <div class="row">

      @if (count($errors)>0)
      <ul>
          @foreach ($errors->all() as $item)
             <li>
                 {{$item}}
             </li>
          @endforeach
      </ul>
      @endif
    <div class="card-body pb-2">
              <form action="{{route('stagiaire.update',['id'=>$stagiaire->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
       
                  <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Nom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le nom de stagiaire"   name="nom" value ="{{$stagiaire->nom}}">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Prenom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le prénom de stagiaire" name="prenom" value ="{{$stagiaire->prenom}}">
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <label class="form-label">Email <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer l'email de stagiaire "   name="email" value ="{{$stagiaire->email}}">
            </div>
            <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">L'institut <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer l'institut de stagiaire" name="institut" value ="{{$stagiaire->institut}}">
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Filiaire <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer la filiaire de stagiaire" name="filiaire" value ="{{$stagiaire->filiaire}}">
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Sujet de stage <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le sujet de stage" name="sujet_stage" value ="{{$stagiaire->sujet_stage}}">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
            <label class="form-label">Type de stage <span class="text-red">*</span> </label>
            <select name="type_stage" id="select-countries" class="form-control custom-select select2">
                <option value="stage d'initiation" >stage initiation</option>
                <option value="stage de perfectionnement">stage de perfectionnement</option>
                <option value="stage de pfe">Stage PFE</option>

                <option value="public" selected>Autre</option>
            </select>
            </div>
          </div>

          <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Date début de stage <span class="text-red">*</span></label>
              <input type="date" class="form-control" placeholder="Entrer la date de début" name="date_debut" value ="{{$stagiaire->date_debut}}">
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Date fin de stage <span class="text-red">*</span></label>
              <input type="date" class="form-control" placeholder="Entrer la date fin" name="date_fin" value ="{{$stagiaire->date_fin}}">
            </div>
          </div>

          <div class="form-group">
                <label for="exampleFormControlInput1">Photo</label>
                <input type="file" class="form-control" name="image" value ="{{$stagiaire->image}}">
              </div>
          <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <button class="btn btn-pill btn-primary" type="submit">Enregister</button>
                    </div>
                  </div>
                </div>
        </form>
    </div>
</div>



@endsection






