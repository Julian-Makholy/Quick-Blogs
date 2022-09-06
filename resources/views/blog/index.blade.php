@extends('blog.layout')

@section('content')

@php
 $i = 0;
@endphp

<div class="container">
      @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
        {{$message}}
        </div>
      @endif
  </div>

  <div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
             <h1 class="m-0 float-sm-center">Quick Blogs</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Welcome</a></li>
                    <li class="breadcrumb-item active">Main page</li>
                </ol>
            </div>
        </div>
    </div>
</div>

  <div class="jumbotron container bg-light border rounded-3" style='text-align: center'>

          <p>You can search for a specific blog by its title, they are presented below!</p>

          <form type="get" action="{{url('/search')}}">
           <div class="row" style='align-items-center'>
            <div class="col">
              <input id="title-search" name="query" type="search" class="form-control mb-2" autocomplete="title" placeholder="Blog title here"/>
            </div>
           <div class="col">
           <button style='padding:1%' class="btn btn-success mb-2" type="submit"> Search </button>
           </div>

           </div>
          </form>      
          <p>You are on the main screen</p>
          <br>

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
            @foreach ($blogs as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->date }}  UTD</td>
                <td>{{ $item->detail }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a  class="btn btn-success" href="{{ route('blogs.edit',$item->id)}}"> Edit </a>
                        </div>

                        <div class="col-sm">
                            <a  class="btn btn-primary" href="{{ route('blogs.show',$item->id)}}"> Show</a>
                        </div>

                        <div class="col-sm">
                            <a  class="btn btn-warning" href="{{ route('soft.delete',$item->id)}}">Trash</a>
                        </div>

                        <div class="col-sm">
                            <form action="{{ route('blogs.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </div> 
                      </div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
     {!! $blogs->links() !!}
  </div>
  <br></br>
<a class="btn btn-primary btn-lg" href="{{ route('blogs.create')}}" role="button">Create</a>
<a class="btn btn-primary btn-lg" href="{{ route('blog.trash')}}" role="button">Trash</a>
</div>
  
@endsection