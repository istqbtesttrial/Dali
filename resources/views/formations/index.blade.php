@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="side-app">

            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary"><i class="ion-clipboard"></i>Liste des formations</h4>
                </div>
                <div class="page-rightheader">
                    <div class="btn-list">
                        <button class="btn btn-outline-primary"><i class="fe fe-download me-2"></i>
                            Import</button>
                        <a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
                        <div class="dropdown-menu border-0">
                                <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                <a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page header-->

            <!-- Row -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="btn-list">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                <a class="btn bg-success-transparent" href="{{ route('formation.create') }}">
                                    <i class="fe fe-edit"></i>Ajouter une formation
                                </a>
                            </div>
                            <div class="table-responsive">
                                @if ($formations->count() > 0)
                                    @component('partials.table', [
                                        'headers' => ['ID', 'Niveau', 'Spécialité', 'Groupe', 'Formateurs', 'Matières', 'Étudiants', 'Description', 'Actions']
                                    ])
                                        @php $i = 1; @endphp
                                        @foreach ($formations as $item)
                                            <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $item->niveau }}</td>
                                                <td>{{ $item->specialite }}</td>
                                                <td>{{ $item->groupe }}</td>
                                                <td>{{ $item->formateurs }}</td>
                                                <td>{{ $item->matieres }}</td>
                                                <td>{{ $item->etudiants }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <a class="text-success" href="">
                                                        <button type="button" class="btn bg-warning-transparent">
                                                            <i class="zmdi zmdi-collection-text"></i>
                                                        </button>
                                                    </a>
                                                    <a class="text-warning" href="{{ route('formation.delete', ['id' => $item->id]) }}">
                                                        <button type="button" class="btn bg-teal-transparent">
                                                            <i class="fe fe-trash"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endcomponent
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        pas de formations!
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Row -->


        </div>
    </div>
@endsection
