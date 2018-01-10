@extends('layouts.app')

@section('content')

    <div class="col-md-9 p-0">
        <div class="col-md-11 p-l-0 m-t-30">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

@endsection
