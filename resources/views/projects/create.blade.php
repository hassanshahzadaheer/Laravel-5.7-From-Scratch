@extends('layout')
@section('title','Create project')
@section('content')
    <h1 class="title">Create a new project</h1>
    <form class="form" action="/projects" method="post">
        {{ csrf_field() }}

      <div class="field">
        <label class="field" for="title">Title</label>
        <div class="control">
            <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" value="{{old('title')}}" placeholder="Project Title" >
        </div>

      </div>
      <div class="field">
        <label class="field" for="description">Project Description</label>
        <div class="control">
          <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description" rows="10" cols="25 " placeholder="Project Description" >{{old('description')}}</textarea>
        </div>

      </div>
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-link ">Create Project </button>

        </div>

      </div>
      </form>

    @include('errors')

@endsection
