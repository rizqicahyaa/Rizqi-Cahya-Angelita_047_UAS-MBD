<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $table = "Employees";
    use HasFactory;
    Protected $fillable = [
        'EmployeeID',
        'LastName',
        'FirstName',
        'Title',
        'TitleOfCourtesy',
        'BirthDate',
        'HireDate',
        'Address',
        'City',
        'Region',
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'EmployeeID', 'EmployeeID');
    }

}
