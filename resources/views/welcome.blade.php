@extends('blog.layout')

@section('content')
<style>
.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}
</style>

<div class="px-4 py-5 my-5 text-center">
<h1 class="display-5 fw-bold">Welcome, This is a simple laravel project made for an intership.</h1>

<p class="lead mb-4">Quickly design and customize blogs with:<br></br>
Quick blog: A simple C,R,U,D system for a blog that consists of:<br></br> id,title,date,description</p>

<form action="{{ route('blogs.index')}}" method="get">
<div class="form-group btn btn-primary btn-lg px-4 gap-3">
<button type="submit"  class="btn btn-primary">Lets Start</button>

</div>
</form>          
</div>

<div class="b-example-divider"></div>

 
@endsection