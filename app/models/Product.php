<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getDvd()
    {
        return $this->hasOne("App\models\Dvd");
    }

    public function getBook()
    {
        return $this->hasOne("App\models\Book");
    }

    public function getFurniture()
    {
        return $this->hasOne("App\models\Furniture");
    }
}