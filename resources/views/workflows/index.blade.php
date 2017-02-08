@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Workflow
                    <span style="float: right;"><a href="{{ URL::to('workflows/create') }}" > Create Approval Process </a></span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                @foreach( $modules as $key => $module )
                                    <li> {!! $module !!} - {{ $key }} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
