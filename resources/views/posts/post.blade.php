<h2 class="blog-post-title">
   <a href="/post/{{ $post->id }}">
      {{ $post->title }}
   </a>
</h2>
<p class="blog-post-meta">
   {{ $post->created_at->toFormattedDateString() }}
   <a href="#">Mark</a>
</p>
{{ $post->body }}
