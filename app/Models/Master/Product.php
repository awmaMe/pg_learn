<?php

namespace App\Models\Master;

use App\Models\BaseModel;
use App\Models\User;

class Product extends BaseModel
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
