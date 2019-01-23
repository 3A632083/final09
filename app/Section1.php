<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section1 extends Model
{
    protected $table = 'section1';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
