@extends('layouts.master')

@section('content')
   <h1>Publish a Post</h1>
   <form method="POST" action=/posts>
      {{ csrf_field() }}

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Title</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Title" id="title" name="title">
         </div>
     </div>

     <div class="form-group row">
       <label class="col-sm-2 col-form-label">Body</label>
       <div class="col-sm-10">
         <textarea class="form-control" rows="5" placeholder="write here..." id="body" name="body"></textarea>
       </div>
     </div>

     <div class="form-group row">
        <button type="submit" class="btn btn-primary">Publish</button>
     </div>

     <div class="form-group row">
        @include('layouts.errors')
     </div>
   </form>

@endsection
