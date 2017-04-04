<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>blog task</title>
</head>
<body>
    <b>hello ini daftar taiap task</b>
    <ul>
      {{-- @foreach ($tasks as $task) --}}
      <li> {{ $task->body }} </li>
      {{-- @endforeach --}}
    </br>
      <a href="/tasks"> kembali </a>
    </ul>
</body>
</html>
