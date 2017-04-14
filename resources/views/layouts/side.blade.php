<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">

            @foreach($archive as $stats)
            <li><a href="/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']}},{{$stats['year']}}</a></li>
                @endforeach

        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/himanshu096">GitHub</a></li>
            <li><a href="https://www.facebook.com/himanshuyadav96">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->