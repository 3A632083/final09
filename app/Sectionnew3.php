<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectionnew3 extends Model
{
    protected $table = 'sectionnew3';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
