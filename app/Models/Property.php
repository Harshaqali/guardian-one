<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';
    protected $fillable = ['name', 'discription', 'amount'];
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'property_id');
    }
}
