@extends('layouts.front')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Espace Étudiant</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container my-5">
        @foreach($formations as $formation)
            <div class="mb-4">
                <h2>{{ $formation->specialite }} ({{ $formation->niveau }})</h2>
                <h5>Formateurs :</h5>
                <ul>
                    @foreach($formation->instructors as $instructor)
                        <li>{{ $instructor->name }}</li>
                    @endforeach
                </ul>
                @foreach($formation->courses as $course)
                    <div class="ms-3">
                        <h4>{{ $course->title }}</h4>
                        <p>{{ $course->description }}</p>
                        <h6>Ressources :</h6>
                        <ul>
                            @foreach($course->resources as $resource)
                                <li><a href="{{ $resource->url }}">{{ $resource->type }}</a></li>
                            @endforeach
                        </ul>
                        <h6>Emploi du temps :</h6>
                        <ul>
                            @foreach($course->schedules as $schedule)
                                <li>{{ $schedule->day }} - {{ $schedule->time }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection

