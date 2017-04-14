@extends('layouts.master')

@section('content')
    <div class="col-sm-8">
    <h1>Create a post</h1>

<hr>


    <form method="POST" action="/posts">

        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <textarea name="title" id="title" class="form-control" placeholder="Enter Title of post"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputBody">Discription</label>
           <textarea id="body" name="body" class="form-control"></textarea>
        </div>


        <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>

        </div>

       @include('layouts.errors')
    </form>
    </div>
@endsection