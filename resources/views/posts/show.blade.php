@extends('layouts.master')

@section('content')
   <h1> {{ $post->title }} </h1>
   <p>
      {{ $post->body }}
   </p>

   <div class="comments">
      <div class="list-group">
         <ul>
            @foreach ($post->comments as $comment)
               <li class="form-control">{{ $comment->body }} - {{$comment->created_at->diffForHumans()}}</li>
            @endforeach
         </ul>
      </div>

      <div class="card">
         <div class="card-block">
            <form action="/comments/{{ $post->id }}" method="post">
               <div class="form-group">
                  {{ csrf_field() }}
                  <textarea name="body" rows="3" placeholder="put comment here" class="form-control" required></textarea>
                  <button type="submit" class="btn btn-primary"> Comment </button>
               </div>
            </form>
         </div>
      </div>

      @include('layouts.errors')

   </div>
@endsection
