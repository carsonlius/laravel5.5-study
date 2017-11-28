<?php

use Facades\App\Services\Weibo;

// 监听App\hobby model的create事件
// Event::listen('eloquent.created: App\hobby', function(){
//     dump(' A hobby is created');
// });

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

Route::name('dashbord')->get('/', function () {
    \App\hobby::create(['user_id' => 2, 'hobby' => '冰岛啤酒']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hobby/create', 'HobbyController@create');

Route::post('/hobby/store', 'HobbyController@store');

Route::get('/hobby/{hobby}', 'HobbyController@show');

Route::get('/post/{post}', 'PostController@show');

Route::get('/hobbys/show', function(){

    $hobby = \App\hobby::all();
    $hobby_new = $hobby->each->archive(); //改变属性 返回新的数组
    return $hobby_new;
});

Route::get('/hobbys/hobby', function (){
    $hobby = \App\hobby::all();
    return $hobby->map->hobby; // map获取单一属性
});

Route::get('/hobbys/sum', function(){
    $hobby = \App\hobby::all();
    return $hobby->sum->id; // just sum
});

Route::get('/hobbys/sort', function(){
    $hobby = \App\hobby::all();
    $hobbys = $hobby->sortBy->user_id;
    return $hobbys->values()->all();
});


Route::get('/mail/markdown', function() {
    $obj_email = new App\Mail\LessonPublished(App\User::first());

    Mail::to(App\User::first())->send($obj_email);
});

Route::get('/Weibo/publish', function(){
    Weibo::publish('这是一条重要的微博信息');
});

Route::get('/Hobbys/showFacade', 'HobbyController@showFacade');
