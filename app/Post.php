<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //fillable = terima semua data apapun ke fild ini (ga masalah meski di hack)
    protected $fillable = ['title', 'body'];
   //guarded = tidak mau terima masukan data apapun untuk isi fild ini (untuk pengamanan pada fild yang rawan)
    protected $guarded = ['id'];
}
