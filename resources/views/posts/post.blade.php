<h2 class="blog-post-title">
   <a href="/post/{{ $post->id }}">
      {{ $post->title }}
   </a>
</h2>
<p class="blog-post-meta">
   <a href="?id={{ $post->user->id }}">{{ $post->user->name }}</a> on
   {{ $post->created_at->toFormattedDateString() }}
</p>
{{ $post->body }}
