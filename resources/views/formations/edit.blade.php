@extends('layouts.app')

@section('content')
<div class="page-leftheader">
    <h4 class="page-title mb-0 text-primary">Modifier une formation</h4>
</div>
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary buttons-copy buttons-html5" href="{{ route('formations') }}">Liste des formations</a>
    </div>
    <div class="card-body pb-2">
        <form class="" action="{{ route('formation.update', $formation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Niveau <span class="text-red">*</span></label>
                    <input type="text" class="form-control" placeholder="Entrer le niveau de la formation" name="niveau" value="{{ old('niveau', $formation->niveau) }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Spécialité <span class="text-red">*</span></label>
                    <input type="text" class="form-control" placeholder="Entrer la spécialité de la formation" name="specialite" value="{{ old('specialite', $formation->specialite) }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Groupe <span class="text-red">*</span></label>
                    <input type="text" class="form-control" placeholder="Entrer le groupe de la formation" name="groupe" value="{{ old('groupe', $formation->groupe) }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Formateurs <span class="text-red">*</span></label>
                <input type="text" class="form-control" placeholder="Entrer les formateurs de la formation" name="formateurs" value="{{ old('formateurs', $formation->formateurs) }}">
            </div>

            <div class="form-group">
                <label class="form-label">Matières <span class="text-red">*</span></label>
                <input type="text" class="form-control" placeholder="Entrer les matières de la formation" name="matieres" value="{{ old('matieres', $formation->matieres) }}">
            </div>

            <div class="form-group">
                <label class="form-label">Étudiants <span class="text-red">*</span></label>
                <input type="text" class="form-control" placeholder="Entrer les étudiants de la formation" name="etudiants" value="{{ old('etudiants', $formation->etudiants) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control mb-4" placeholder="Veuillez saisir la description de la formation" rows="3" name="description">{{ old('description', $formation->description) }}</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-pill btn-primary" type="submit">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>
@endsection

