<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'title',
    ];
    public function documents(){
        return $this->hasMany( Document::class);
    }
}
