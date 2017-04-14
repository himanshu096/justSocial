<!DOCTYPE html>

<html>
<head>

</head>
<body>


<ul>
@foreach ($tasks as $task)

<li>
<a href="/data/{{ $task->id }}">
    {{$task->id}}
</a>
</li>

@endforeach

    </ul>


</body>
</html>