
@extends('blog.layout')

@section('content')

@php
 $i = 0;
@endphp

<div class="content-header">

  <div class="container-fluid">

      <div class="row mb-2">

          <div class="col-sm-6">
           <h1 class="m-0 float-sm-center">Quick Blogs</h1>
          </div>

          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Main page</a></li>
                  <li class="breadcrumb-item active">Trash</li>
              </ol>
          </div>
      </div>
  </div>
</div>

  <div class="jumbotron container bg-light border rounded-3" style='text-align: center'>
          <h1> Quick Blog</h1>
          <br></br>   
          <p>You are on the trashed blogs page</p>
          <br></br>

    <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col" style="width: 5%">#</th>
            <th scope="col" style="width: 10%">blog title</th>
            <th scope="col" style="width: 15%">blog date</th>
            <th scope="col" style="width: 50%">blog desc</th>
            <th scope="col" style="width: 20%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($blogs as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->date }}  UTD</td>
                <td>{{ $item->detail }}</td>
                <td>

                <div class="row">
                <div class="col-sm">
                    <a  class="btn btn-success" href="{{ route('blog.back.from.trash',$item->id)}}">Restore</a>
                </div>
                <div class="col-sm">
                    <a  class="btn btn-danger" href="{{ route('blog.delete.from.database',$item->id)}}">Delete</a>
                </div> 
                </div>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
     {!! $blogs->links() !!}
  </div>
  
  <br></br><br></br><br></br>
<form action="{{ route('blogs.index')}}" method="get">
        <div class="form-group" style='text-align:center'>
            <button type="submit"  class="btn btn-primary">Go back</button>
        </div>
    </form>
</div>
  
@endsection