@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="row" style="padding: 20px;">
                    {!! Form::open(['url' => 'language']) !!}
                        {{ csrf_field() }}
                        <div class="input-field">
                            <?php
                                echo Form::select('lang', ['en' => 'English', 'ar' => 'Arabic'], \App::getLocale() ,['class' => 'form-control']);
                            ?>
                        </div>
                        <br>
                        <div class="input-field">
                            <?php  echo Form::submit('Change',['class' => 'btn btn-primary']); ?>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="panel-body">
                    <p> {{ \Session()->get('lang') }} </p>
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th> @lang('app.name') </th>
                                <th> @lang('app.description') </th>
                                <th> @lang('app.created at') </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tasks as $task )
                            <tr>
                                <td> {{ $task->name }} </td>
                                <td> {{ $task->description }} </td>
                                <td> {{ $task->created_at->diffForHumans() }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
