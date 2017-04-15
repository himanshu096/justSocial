<div class="blog-post">

    <h2 class="blog-post-title">

        <a href="/posts/{{ $post-> id }}">
        {{ $post-> title }}
        </a>

    </h2>

    @if(count($post->tags))
        @foreach($post->tags as $tag)

            <a href="/posts/tags/{{$tag->name}}"> <span class="badge badge-success">{{$tag->name}}</span></a>


        @endforeach

    @endif

    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}  by <a href="#">{{$post->user->name}}</a></p>

    {{$post->body}}
</div><!-- /.blog-post -->
