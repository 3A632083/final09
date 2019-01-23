<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectionnew extends Model
{
    protected $table = 'sectionnew';

    protected $fillable = ['time','seat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
