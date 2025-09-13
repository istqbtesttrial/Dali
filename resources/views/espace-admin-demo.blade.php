@extends('layouts.front')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Espace Admin (Demo)</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <a href="{{ url('/etudiants') }}" class="text-decoration-none">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Étudiants</h5>
                            <p class="card-text">12</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/formation/create') }}" class="text-decoration-none">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Formations</h5>
                            <p class="card-text">3</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/suggestions') }}" class="text-decoration-none">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Suggestions</h5>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

