@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous etes acceder à notre application avec succés!') }}
                </div>

                <div class="row row-sm">
							<div class="col-lg-12">
								<div class="card mg-b-20" id="map">
									<div class="card-body">
										<div class="ht-200" id="leaflet1" style="height:15px"></div>
                                        <img src="{{asset('assets/images/brand/images.jpg')}}" alt="Azea logo">
									</div>
								</div>
							</div></div>
            </div>
        </div>
    </div>
</div>
@endsection
