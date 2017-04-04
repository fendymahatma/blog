<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>blog task</title>
</head>
<body>
    <b>hello ini daftar task</b>
    <ul>
      @foreach ($tasks as $task)
        <li><a href="/tasks/{{$task->id}}">  {{ $task->body }} </a></li>
      @endforeach
    </ul>
</body>
</html>
