@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                   <a href="/users">
                                       <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                        <div class="card-header">Users</div>
                                        <div class="card-body">
                                            <h5 class="card-title">     <span><i class="fas fa-users fa-4x f-s-40 color-danger"></i></span></h5>
                                              </div>
                                    </div>
                                   </a>
                                </div>
                                <div class="col-sm">
                                    <a href="/animals">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                        <div class="card-header"> Animals</div>
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-chess-knight fa-4x"></i>

                                                </h5>
                                              </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-sm">
                                    <a href="/production">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Production</div>
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-coins fa-4x"></i>

                                            </h5>
                                            </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
