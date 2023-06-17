<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $table = "Customers";
    use HasFactory;

    protected $fillable = [
        'CustomerID',
        'CompanyName',
        'ContactName',
        'ContactTitle',
        'Address',
        'City',
        'Region',
        'PostalCode',
    ];

    public function orders()
    {

        return $this->hasMany(Orders::class, 'CustomerID', 'CustomerID');
    }
}
