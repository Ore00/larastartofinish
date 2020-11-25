@extends('layouts.app')
@section('title') Article @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="card-header">

                    {!! Form::open(['url' => 'articles', 'files' => true]) !!}
                    <div class="form-group">
                    {!! Form::label('title', 'Title', ['class' => 'awesome']) !!}
                    {!! Form::text('title', 'Give a good title', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">

                    {!! Form::label('body', 'Body', ['class' => 'awesome']) !!}
                    {!! Form::textarea('body', 'Write your article Content', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('published_at', 'Published On', ['class' => 'awesome']) !!}
                    {!! Form::input('date', 'published_at', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::file('image') !!}
                    </div>
                    <div class="form-group">
                    {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
