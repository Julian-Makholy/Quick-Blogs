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
                  <li class="breadcrumb-item active">Create</li>
              </ol>
          </div>
      </div>
  </div>
</div>

<div class="jumbotron container bg-light border rounded-3" style='text-align: center' >
<div class="px-4 py-5 my-5 text-center">
<h1 class="display-5 fw-bold">Add blog posts to your blog!</h1>
<br></br>
<form action="{{ route('blogs.store')}}" method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" name="title" class="form-control"  placeholder="blog title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Date</label>
            <input type="text" name="date" class="form-control"  placeholder="blog date">
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Details</label>
          <textarea class="form-control" name="detail"   rows="3"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </div>
    </form>
    <form action="{{ route('blogs.index')}}" method="get">
        <div class="form-group" style='text-align:center'>
            <button type="submit"  class="btn btn-warning">Go back</button>
        </div>
</div>





@endsection
