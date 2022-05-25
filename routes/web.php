<?php

use App\Models\Order;
use App\Models\Report;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // echo "Hello World";
    echo getName();
    echo "<br>";
    recursion(1);
    echo "<br>";
    // $order = new Order();
    // echo($order->confirmOrder()."\n");
    // echo($order->order_id);
    // echo($order->balanceItem());
    // echo "<br>";
    $report = new Report();
    // echo($report->balanceItem()."\n");
    // echo($report->order_id);
    // echo "<br>";
    // echo($report->reduceQty());
    $report->sayHello();


});
