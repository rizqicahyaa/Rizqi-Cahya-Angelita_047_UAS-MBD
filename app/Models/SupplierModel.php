<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    public $table = "Suppliers";
    use HasFactory;

    protected $fillable = [
        'SuppliersID',
        'CompanyName',
        'ContactName',
        'ContactTitle',
        'Address',
        'City',
        'Region',
        'PostalCode',
    ];

    public function products()
    {

        return $this->hasMany(ProductsModel::class, 'SupplierID', 'SupplierID');
    }
}
