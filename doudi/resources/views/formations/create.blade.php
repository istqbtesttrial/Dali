@extends('layouts.app')

@section('content')
<div class="page-leftheader">
    <h4 class="page-title mb-0 text-primary">Ajouter une absence</h4>
</div>
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary buttons-copy buttons-html5" href = "{{route('absences')}}">Liste des absences</a>
    </div>
    <div class="card-body pb-2">
        <form class="" action="{{route('absence.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Nom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le nom de stagiaire absent "   name="nom">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Prenom <span class="text-red">*</span></label>
              <input type="text" class="form-control" placeholder="Entrer le prénom de stagiaire absent " name="prenom">
            </div>
          </div>
            <div class="form-group">
          <label for="exampleFormControlTextarea1">Justification</label>
        

        <textarea class="form-control mb-4" placeholder="veuillez saisir la justification d'absence" rows="3" name="justification"></textarea>
        </div>
         
          <div>
            <label class="form-label">Veuillez saisir la date  d'absence<span class="text-red">*</span></label>

            <input type="date" id="bday" name="date">
          </div></div>
          <div class="form-group">
           <button class="btn btn-pill btn-primary" type="submit">Enregister</button>
           </div>
        </form>
    </div>
</div>



@endsection