<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    public function product()
    {
        return $this->belongsTo("App\models\Product");
    }
}