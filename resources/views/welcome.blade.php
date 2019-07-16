@extends('layout')
@section('title','Home')

@section('content')
    <h1 class="title">Welcome to Cs50 Laravel</h1>

    <nav class="navbar is-light">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
    </div>

    <div  class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">Home</a>
        <a class="navbar-item" href="/projects/create">Create New Porject</a>
        <a class="navbar-item" href="/projects">Show All Projects</a>
      </div>


    </div>
  </nav>

@endsection
