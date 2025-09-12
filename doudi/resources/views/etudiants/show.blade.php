@extends('layouts.app1')

@section('content')

<div class="page-leftheader">
  <h4 class="page-title mb-0 text-primary">Tout Les détails de stagiaire:  {{$stagiaire->nom}}</h4>
</div>
<div class="card">
  <div class="card-header">
      <a class="btn btn-primary buttons-copy buttons-html5" href = "{{route('stagiaires')}}">tout les stagiaires</a>
  </div>
  <div class="card-body pb-2">
     
               
                  
                    <div class="card-group p-5">
                      <div class="card shadow-none border border-end-0 overflow-hidden">
                        <div class="card-body">
                          <div class="card-body">
                            <ul class="list-group">
                              <li class="list-group-item list-group-item-success"> nom: <p>{{$stagiaire->nom}} </p></li>
                              <li class="list-group-item list-group-item-info"> prenom:  <p>{{$stagiaire->prenom}}</p></li>
                              <li class="list-group-item list-group-item-success"> nom: <p>{{$stagiaire->type_stage}} </p></li>
                              <li class="list-group-item list-group-item-info"> prenom:  <p>{{$stagiaire->sujet_stage}}</p></li>
                              <li class="list-group-item list-group-item-warning">date début: <p>{{$stagiaire->date_debut}}</p></li>
                              <li class="list-group-item list-group-item-danger">date fin: <p>{{$stagiaire->date_fin}}</p></li>
                            </ul>
                          </div>
                         
                                                </div>
                      </div>
                      <div class="card shadow-none border border-end-0 overflow-hidden">
                        <img src="{{URL::asset($stagiaire->image)}}" alt="{{$stagiaire->image}}" class="card-image1 ">
                        <div class="ms-auto text-muted">
                          <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-plus  fs-16 text-icon"></i></a>
                          <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                        </div>
    
                        <div class="card-body">
                          
                          <div class="form-group">
                            
                            <div class="input-group">
        
                              
                            </div>
                          </div>                        </div>
                      </div>
                     
                      </div>
                    </div>
                  </div>

          </div>
      </div>

    </div>
    </div>

@endsection


