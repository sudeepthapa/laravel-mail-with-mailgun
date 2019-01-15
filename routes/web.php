<?php
use Illuminate\Support\Facades\Mail;
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

    $data = [
        'title'=>'Hi, Its about Mail',
        'content'=>'mail is very easy using mailgun'
    ];

    Mail::send('emails.test',$data ,function($message){
        $message->to('sudeptech@gmail.com', 'sudip')->subject('HEllo this is a test.');
    }); 

    


});
