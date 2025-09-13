@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une suggestion</h1>
    <form method="POST" action="{{ route('suggestion.store') }}">
        @csrf
        <div class="mb-3">
            <label for="niveau" class="form-label">Niveau</label>
            <input type="text" class="form-control" id="niveau" name="niveau" required>
        </div>
        <div class="mb-3">
            <label for="specialite_bac" class="form-label">Spécialité du bac</label>
            <input type="text" class="form-control" id="specialite_bac" name="specialite_bac" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_g" class="form-label">Moyenne générale</label>
            <input type="text" class="form-control" id="moyenne_g" name="moyenne_g" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_math" class="form-label">Moyenne math</label>
            <input type="text" class="form-control" id="moyenne_math" name="moyenne_math" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_eco" class="form-label">Moyenne économie</label>
            <input type="text" class="form-control" id="moyenne_eco" name="moyenne_eco" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_gestion" class="form-label">Moyenne gestion</label>
            <input type="text" class="form-control" id="moyenne_gestion" name="moyenne_gestion" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_info" class="form-label">Moyenne informatique</label>
            <input type="text" class="form-control" id="moyenne_info" name="moyenne_info" required>
        </div>
        <div class="mb-3">
            <label for="moyenne_fr" class="form-label">Moyenne français</label>
            <input type="text" class="form-control" id="moyenne_fr" name="moyenne_fr" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
