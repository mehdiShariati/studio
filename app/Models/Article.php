<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Article extends Model
{
    protected $guarded=[];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
