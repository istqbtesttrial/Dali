@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des suggestions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Niveau</th>
                <th>Spécialité</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suggestions as $suggestion)
            <tr>
                <td>{{ $suggestion->id }}</td>
                <td>{{ $suggestion->niveau }}</td>
                <td>{{ $suggestion->specialite_bac }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
