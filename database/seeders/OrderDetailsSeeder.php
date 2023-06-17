<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('OrderDetails')->insert([
            [
                'OrderID' =>'1',
                'ProductID' =>'1',
                'UnitPrice' =>'64000.00',
                'Quantity' =>'20',
                'Discount' =>'0.2'
            ],
            [
                'OrderID' =>'2',
                'ProductID' =>'2',
                'UnitPrice' =>'45000.00',
                'Quantity' =>'25',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'3',
                'ProductID' =>'3',
                'UnitPrice' =>'54000.00',
                'Quantity' =>'80',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'4',
                'ProductID' =>'4',
                'UnitPrice' =>'166250.00',
                'Quantity' =>'15',
                'Discount' =>'0.05'
            ],
            [
                'OrderID' =>'5',
                'ProductID' =>'5',
                'UnitPrice' =>'16170.00',
                'Quantity' =>'1',
                'Discount' =>'0.02'
            ],
            [
                'OrderID' =>'6',
                'ProductID' =>'6',
                'UnitPrice' =>'196000.00',
                'Quantity' =>'30',
                'Discount' =>'0.2'
            ],
            [
                'OrderID' =>'7',
                'ProductID' =>'7',
                'UnitPrice' =>'45000.00',
                'Quantity' =>'1',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'8',
                'ProductID' =>'8',
                'UnitPrice' =>'193000.00',
                'Quantity' =>'1',
                'Discount' =>'0.5'
            ],
            [
                'OrderID' =>'9',
                'ProductID' =>'9',
                'UnitPrice' =>'237500.00',
                'Quantity' =>'1',
                'Discount' =>'0.05'
            ],
            [
                'OrderID' =>'10',
                'ProductID' =>'9',
                'UnitPrice' =>'225000.00',
                'Quantity' =>'1',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'11',
                'ProductID' =>'11',
                'UnitPrice' =>'216000.00',
                'Quantity' =>'3',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'12',
                'ProductID' =>'12',
                'UnitPrice' =>'125000.00',
                'Quantity' =>'50',
                'Discount' =>'0.5'
            ],
            [
                'OrderID' =>'13',
                'ProductID' =>'13',
                'UnitPrice' =>'480000.00',
                'Quantity' =>'100',
                'Discount' =>'0.2'
            ],
            [
                'OrderID' =>'14',
                'ProductID' =>'14',
                'UnitPrice' =>'875000.00',
                'Quantity' =>'100',
                'Discount' =>'0.5'
            ],
            [
                'OrderID' =>'15',
                'ProductID' =>'15',
                'UnitPrice' =>'928125.00',
                'Quantity' =>'75',
                'Discount' =>'0.25'
            ],
            [
                'OrderID' =>'16',
                'ProductID' =>'16',
                'UnitPrice' =>'735000.00',
                'Quantity' =>'50',
                'Discount' =>'0.4'
            ],
            [
                'OrderID' =>'17',
                'ProductID' =>'17',
                'UnitPrice' =>'225000.00',
                'Quantity' =>'50',
                'Discount' =>'0.1'
            ],
            [
                'OrderID' =>'18',
                'ProductID' =>'18',
                'UnitPrice' =>'656200.00',
                'Quantity' =>'20',
                'Discount' =>'0.15'
            ],
            [
                'OrderID' =>'19',
                'ProductID' =>'19',
                'UnitPrice' =>'625000.00',
                'Quantity' =>'50',
                'Discount' =>'0.5'
            ],
            [
                'OrderID' =>'20',
                'ProductID' =>'20',
                'UnitPrice' =>'1575000.00',
                'Quantity' =>'60',
                'Discount' =>'0.25'
            ]
            ]);
    }
}
