<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippers extends Model
{
    public $table = "Shippers";
    use HasFactory;

    protected $fillable = [
        'ShipperID',
        'CompanyName',
        'Phone',
    ];

    public function orders()
    {

        return $this->hasMany(Orders::class, 'ShipperID', 'ShipperID');
    }
}
