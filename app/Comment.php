<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   //fillable = terima semua data apapun ke fild ini (ga masalah meski di hack)
   protected $fillable = ['body','post_id'];
   //guarded = tidak mau terima masukan data apapun untuk isi fild ini (untuk pengamanan pada fild yang rawan)
   protected $guarded = ['id'];

   public function post()
   {
      return $this->belongsTo(Post::class);
   }
}
