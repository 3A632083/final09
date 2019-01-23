<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section3 extends Model
{
    protected $table = 'section3';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
