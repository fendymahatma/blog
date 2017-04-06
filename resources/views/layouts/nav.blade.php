<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      {{-- <a class="nav-link active" href="/">Home</a> --}}
      {{-- <a class="nav-link" href="#">New hires</a> --}}
      {{-- <a class="nav-link" href="#">About</a> --}}
      @if (Auth::check())
         <a class="nav-link" href="/post/create">New Post</a>
         <a class="nav-link ml-auto" href="#">Hi {{ Auth::user()->name }}</a>
         <a class="nav-link" href="/logout"> | logout</a>
      @else
         <a class="nav-link ml-auto" href="/login">Login</a>
         <a class="nav-link " href="/register">Register</a>
      @endif
    </nav>
  </div>
</div>

<div class="blog-header">
  <div class="container">
    <h1 class="blog-title"><a href="/">My Blog</a></h1>
    <p class="lead blog-description">Just a Ordinary Blog</p>
  </div>
</div>
