@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

    <h1>{{$post->title}}</h1>

        {{$post->body}}



    <hr>

    <div class="comments">

        @foreach($post->comments as $comment)

            <article>

                <li class="list-group-item">


                {{$comment->body}}

                    <strong>
                      &nbsp;  {{  $comment->created_at->diffForHumans()  }} by {{$comment->user->name}}
                    </strong>
                </li>
            </article>

        @endforeach



    {{--add comment--}}

            @if(auth()->check())

            <hr>
    <div class="card">
        <div class="card_block">

            <form method="POST" action="/posts/{{$post->id}}/comments">

                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Your Comment Here" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>

                </div>

            </form>

            @include('layouts.errors')
        </div>
    </div>
                @else
               <a href="/login"> Please login to add comment to this post</a>
                @endif

    </div>
    </div>

    @endsection