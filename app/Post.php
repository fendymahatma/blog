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
      if ($id = $filters['id']) {
         $query->where('user_id', $id);
      }

      if ($month = $filters['month']) {
         $query->whereMonth('created_at', Carbon::parse($month)->month);
      }

      if ($year = $filters['year']) {
         $query->whereYear('created_at', $year);
      }
      $query = $query->get();
   }

   public static function archives()
   {
      return static::selectRaw('year(created_at) year, monthname(created_at) month, COUNT(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();
   }
}
