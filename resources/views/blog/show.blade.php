@extends('blog.layout')

@section('content')

<div class="content-header">

  <div class="container-fluid">

      <div class="row mb-2">

          <div class="col-sm-6">
           <h1 class="m-0 float-sm-center">Quick Blogs</h1>
          </div>

          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Main page</a></li>
                  <li class="breadcrumb-item active">Show post</li>
              </ol>
          </div>
      </div>
  </div>
</div>

<div class="jumbotron container bg-light border rounded-3" style='text-align: center' >
<div class="px-4 py-5 my-5 text-center">
<h1 class="display-5 fw-bold">Blog name: {{ $blog->title  }} </h1>
<br></br>
<form action="{{ route('blogs.store')}}" method="POST">
    @csrf
    <div class="form-group">
          <label for="exampleFormControlInput1">{{ $blog->title  }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $blog->date  }}</label>
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">{!! $blog->detail  !!}</label>
        </div>
    </form>

    <form action="{{ route('blogs.index')}}" method="get">
        <div class="form-group" style='text-align:center'>
            <button type="submit"  class="btn btn-primary">Go back</button>
        </div>
</div>

  
@endsection
