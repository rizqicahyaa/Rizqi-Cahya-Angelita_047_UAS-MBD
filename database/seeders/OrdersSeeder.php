<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'OrderID' =>'1',
                'CustomerID'=>'1',
                'EmployeeID' =>'1',
                'OrderDate' =>'2023-06-17',
                'RequireDate' =>'2023-06-17',
                'ShippedDate' =>'2023-07-02',
                'ShipperID' =>'1',
                'ShipVia' =>'Surabaya',
                'Freight' =>'Air',
                'ShipName' =>'Express',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'OrderID' =>'2',
                'CustomerID'=>'2',
                'EmployeeID' =>'2',
                'OrderDate' =>'2023-06-17',
                'RequireDate' =>'2023-06-17',
                'ShippedDate' =>'2023-07-02',
                'ShipperID' =>'1',
                'ShipVia' =>'Surabaya',
                'Freight' =>'Ocean',
                'ShipName' =>'Express',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'OrderID' =>'3',
                'CustomerID'=>'3',
                'EmployeeID' =>'3',
                'OrderDate' =>'2023-06-17',
                'RequireDate' =>'2023-06-17',
                'ShippedDate' =>'2023-07-02',
                'ShipperID' =>'1',
                'ShipVia' =>'Surabaya',
                'Freight' =>'Ground',
                'ShipName' =>'Express',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'OrderID' =>'4',
                'CustomerID'=>'4',
                'EmployeeID' =>'4',
                'OrderDate' =>'2023-06-17',
                'RequireDate' =>'2023-06-17',
                'ShippedDate' =>'2023-07-02',
                'ShipperID' =>'2',
                'ShipVia' =>'Surabaya',
                'Freight' =>'Multimodal',
                'ShipName' =>'Standard',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'OrderID' =>'5',
                'CustomerID'=>'5',
                'EmployeeID' =>'5',
                'OrderDate' =>'2023-06-17',
                'RequireDate' =>'2023-06-17',
                'ShippedDate' =>'2023-07-02',
                'ShipperID' =>'2',
                'ShipVia' =>'Surabaya',
                'Freight' =>'Multimodal',
                'ShipName' =>'Standard',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ]
        ]);
    }
}
