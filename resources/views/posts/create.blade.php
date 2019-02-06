@extends('layouts.app')

@section('content')
    <h1>Create Post </h1>
    {!! Form::open(['action' => 'PostController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Enter Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body','Bodu')}}
                {{Form::textarea('body','',['class'=>'form-control', 'placeholder'=>'Body Text'])}}
            </div>

            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection