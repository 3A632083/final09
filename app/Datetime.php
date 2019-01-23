<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datetime extends Model
{
    protected $table = 'datetimes';

    protected $fillable = ['people','date'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
