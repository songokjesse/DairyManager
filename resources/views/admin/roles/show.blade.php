@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
        <div class="card">
            <div class="card-header">Show Role</div>
            <div class="card-body">

                <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}"> Back</a>
<br>
                <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <br>
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong>
                <ol>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)

                            <li> <label class="label label-success">{{ $v->name }},</label></li>


                    @endforeach

                @endif
                        </ol>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    </div>
@endsection