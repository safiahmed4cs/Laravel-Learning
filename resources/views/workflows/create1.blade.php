@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Workflow</div>
                <div class="panel-body">
                    <div class="row">
                    {{ Html::ul($errors->all(),['class'=>'text-danger']) }}
                        <div class="col-md-6">
                            {{ Form::open(array('url' => 'workflows')) }}
                                <div class="form-group">
                                    {{ Form::label('name', __('app.Hey') ) }}
                                    {{ Form::text('firstname', null, ['class'=>'form-control not-dark', 'placeholder'=> __('app.Enter The display Name') ]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', __('app.description') ) }}
                                    {{ Form::text('description', null, ['class'=>'form-control not-dark', 'placeholder'=>'Enter The description']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::submit('Create the Approval Process!', array('class' => 'btn btn-primary')) }}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
