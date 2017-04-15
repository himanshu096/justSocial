<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            @if(Auth()->check())
                <a class="nav-link" href="/posts/create">New Post</a>
                <a class="nav-link" href="/me/posts">My Post</a>
            <a class="nav-link ml-auto" href="/logout">{{Auth::user()->name}}</a>

            @else

                <a class="nav-link" href="/login">Login</a>
            @endif
        </nav>
    </div>
</div>


<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Himanshu's Blog</h1>
        <p class="lead blog-description">Look around,identify omens..and have a happy Journey!</p>
    </div>
</div>

