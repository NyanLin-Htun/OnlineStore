<?php

// use App\Models\Inter;
// use App\Models\Order;
// use App\Models\Report;
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


    // return view('welcome');
    // echo "Hello World";
    // echo getName();
    // echo "<br>";
    // recursion(1);
    // echo "<br>";
    // $order = new Order();
    // echo($order->confirmOrder()."\n");
    // echo($order->order_id);
    // echo($order->balanceItem());
    // echo "<br>";
    // $report = new Report();
    // echo($report->balanceItem()."\n");
    // echo($report->order_id);
    // echo "<br>";
    // echo($report->reduceQty());
    // $report->sayHello();
    // Report::sayHello();
    // echo "<br>";
    // echo Report::reduceBalance();
    // echo "<br>";
    // echo Report::CONSTANT;
    // echo "<br>";
    // echo Report::$my_static;
    // $report = new Report;
    // $a = new Report(1);
    // echo "-------------\n";
    // $aa = new Report(2);
    // echo "=============\n";

    // echo(Inter::callA());
   



Route::prefix('admin')->group(function(){
    Route::get('foo', function () {
        return 'This is Foo Page';

    });
    Route::redirect('bar','foo');

    Route::view('landing','welcome');

    Route::get('user/{user_id?}', function($user_id = ''){
        echo "User ID is ".$user_id;
        })->name('user');
});
