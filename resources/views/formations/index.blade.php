@extends('layouts.app')
@section('content')

  <body>
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
                            <div class="">
                                <div class="table-responsive">
                                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label><select name="example_length" aria-controls="example" class="form-select form-select-sm select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>                                       
                                        <a class="btn bg-success-transparent" href = "{{route('formation.create')}}"><i class="fe fe-edit"></i>Ajouter une formation </a>
                                    </div>
                                    <div class="dt-buttons btn-group flex-wrap">
                                            </div> </div></div><div class="col-sm-12 col-md-6">

                                                @if ($formations->count ()>0)
                                                <div class="row"><div class="col-sm-12">
                                                    <table id="example" class="table table-bordered text-nowrap key-buttons dataTable no-footer" role="grid" aria-describedby="example_info">
													<thead class="thead-dark">
														<tr role="row">
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Niveau</th>
                                                            <th scope="col">Spécialité</th>
                                                            <th scope="col">Groupe</th>
                                                            <th scope="col">Formateurs</th>
                                                            <th scope="col">Matières</th>
                                                            <th scope="col">Étudiants</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
													</thead>
													<tbody>

                                                    @php
                                                        $i= 1;
                                                    @endphp
                                                    @foreach ($formations as $item )

                                                    <tr>
                                                        <th scope="row">{{$i++}}</th>
                                                        <td>{{$item->niveau}}</td>
                                                        <td>{{$item->specialite}}</td>
                                                        <td>{{$item->groupe}}</td>
                                                        <td>{{$item->formateurs}}</td>
                                                        <td>{{$item->matieres}}</td>
                                                        <td>{{$item->etudiants}}</td>
                                                        <td>{{$item->description}}</td>
                                                        <td>  <a class="text-success" href = ""><button type="button" class="btn bg-warning-transparent"><i class="zmdi zmdi-collection-text"></i></button></a> &nbsp;&nbsp;
                                                            <a class="text-warning" href = "{{route('formation.delete', ['id'=> $item->id])}}"><button type="button" class="btn bg-teal-transparent"><i class="fe fe-trash"></i></button> </a>&nbsp;&nbsp;</td>
                                                      </tr>
                                                    @endforeach
                                                </tbody>
											   	</table>
                                                @else
                                                <div class="coll">
                                                <div class="alert alert-danger" role="alert">
                                                 pas de formations!
                                                </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Row -->


        </div>



  @endsection
















