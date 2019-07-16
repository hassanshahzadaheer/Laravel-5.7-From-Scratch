@extends('layout')
@section('title','Show Project')
@section('content')
<h1 class="title">{{ $projects->title }}</h1>
<div class="content">
  {{$projects->description}}
</div>
  <a href="/projects/{{$projects->id}}/edit">Edit</a>
@if ($projects->tasks->count())
  <div class="box">
      @foreach ($projects->tasks as $task )
        <div>
          <form class="" action="/tasks/{{$task->id}}" method="post">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

              <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                <input class="checkbox " type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>{{$task->description}}
              </label>
          </form>
        </div>
      @endforeach

  </div>
@endif

<form class="box" action="/projects/{{ $projects->id }}/tasks" method="post">
  {{ csrf_field() }}
  <div class="field">
    <label class="" for="add new task">Add new task</label>
    <div class="control">
      <input class="input {{$errors->has('description') ? 'is-danger' : ''}}" type="text" name="description" placeholder="Task name">
    </div>
  </div>
  <div class="field">
    <div class="control">
      <button class="button is-primary" type="submit" placeholder="">Add Task</button>
    </div>
  </div>
  @include('errors')
</form>



@endsection
