@extends('layouts.app')

@section('stylesheets')
  {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
  <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="form-group">
        {{Form::label('title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
        {{Form::file('cover_image')}}
      </div>
      {{Form::hidden('_method','PUT')}}
      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('scripts')
  {!! Html::script('js/select2.min.js') !!}
@endsection
