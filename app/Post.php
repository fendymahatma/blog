<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
   //fillable = terima semua data apapun ke fild ini (ga masalah meski di hack)
   protected $fillable = ['title', 'body','user_id'];
   //guarded = tidak mau terima masukan data apapun untuk isi fild ini (untuk pengamanan pada fild yang rawan)
   protected $guarded = ['id'];

   public  function user()
   {
      return $this->belongsTo(User::class);
   }

   public  function comments()
   {
      return $this->hasMany(Comment::class);
   }

   public function addComment($body)
   {
      $this->comments()->create(compact('body'));
      // Comment::create([
      //    'body' => request('body'),
      //    'post_id' => $this->id
      // ]);
   }

   public function scopeFilter($query, $filters)
   {
      if ($month = $filters['month']) {
         $query->whereMonth('created_at', Carbon::parse($month)->month);
      }

      if ($year = $filters['year']) {
         $query->whereYear('created_at', $year);
      }
      // dd(request('month'), request('year'));
      $query = $query->get();
   }
}
