<!DOCTYPE html>

<html>
<head>

</head>
<body>


<ul>
@foreach ($tasks as $task)

<li>
<h2> <?= $task->body ?></h2>
</li>

@endforeach

    </ul>


</body>
</html>