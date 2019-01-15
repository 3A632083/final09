<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = ['time','num'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
