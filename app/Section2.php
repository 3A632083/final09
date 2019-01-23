<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section2 extends Model
{
    protected $table = 'section2';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
