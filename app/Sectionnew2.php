<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectionnew2 extends Model
{
    protected $table = 'sectionnew2';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
