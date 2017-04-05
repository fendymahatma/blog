<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //fillable = terima semua data apapun ke fild ini (ga masalah meski di hack)
   protected $fillable = ['title', 'body'];
   //guarded = tidak mau terima masukan data apapun untuk isi fild ini (untuk pengamanan pada fild yang rawan)
   protected $guarded = ['id'];

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
}
