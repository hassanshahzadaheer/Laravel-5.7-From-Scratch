@extends('layout')
@section('title','Edit Project')
@section('content')

<h1 class="title">Edit Project</h1>

<form class="form" action="/projects/{{$projects->id}}" method="post" style="margin-buttom">
    {{method_field('PATCH') }}

    {{ csrf_field() }}

  <div class="field">
    <label class="field" for="title">Title</label>
    <div class="control">
        <input class="input" type="text" name="title" value="{{ $projects->title }}" placeholder="Project title">
    </div>

  </div>
  <div class="field">
      <label class="field" for="description">Project Description</label>
    <div class="control">
      <textarea class="textarea" name="description" rows="10" cols="25 " placeholder="description">{{ $projects->description }}</textarea>
    </div>

  </div>
  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link ">Update project </button>

    </div>

  </div>
  </form>

<br>
@include('errors')
  <form class="" action="/projects/{{$projects->id}}" method="post">
    {{method_field('DELETE') }}
    {{ csrf_field() }}

    <div class="field">
      <div class="control">

        <button class="button is-light" type="submit" class="button is-link ">Delete </button>
      </div>

    </div>
  </form>


</form>

@endsection
