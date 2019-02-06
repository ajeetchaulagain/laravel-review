@extends('layouts.app')


@section('content')
<div class="jumbotron">
        <h1 class="display-4">Welcome to 909IT Ticket System</h1>
        <p class="lead">Please create the ticket from our system if you have any issue</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
          <a class="btn btn-secondary btn-lg" href="/register" role="button">Register</a>
        </p>
      </div>
@endsection