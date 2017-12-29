<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $guarded = ["name"];

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'LIKE', "%$search%");
    }
}
