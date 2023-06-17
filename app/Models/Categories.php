<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = "Categories";
    use HasFactory;

    protected $fillable = [
        'CategoryID',
        'CategoryName',
        'Description',
        'Picture',
    ];

    public function products()
    {

        return $this->hasMany(Products::class, 'CategoryID', 'CategoryID');
    }
}
