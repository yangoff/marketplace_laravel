<?php

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
    return view('welcome');
});

Route::get('/model', function () {

//    $user = new \App\User();
//    $user->name = 'User teste';
//    $user->email = 'email@teste.com';
//    $user->password = bcrypt('12345678');
//    $user->save();


    $user = \App\User::find(4);
//    return $user->store;
    //return \App\User::all();
//dd($user->store()->count());
    $loja = \App\Store::find(4);
//    return $loja->products()->where('id',44)->get();
//    $user = \App\User::find(10);
//    $store = $user->store()->create([
//        'name'=>'Loja teste',
//        'description'=>'Loja de produtos de Informática',
//        'mobile_phone'=>'xxx-xxxxx-xxxx',
//        'phone'=>'xxx-xxxxx-xxxx',
//        'slug'=>'loja-teste'
//    ]);
    $store = \App\Store::find(41);
    $produtct = $store->products()->create([
        'name'=>'Notebook Robsu',
        'description'=>'Core 10 Duo',
        'body'=>'Robsu',
        'price'=>2999.00,
        'slug'=>'notebook-dell',
    ]);
    dd($produtct);

});

Route::group(['middleware'=>['auth']],function (){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){

        Route::resource('stores','StoreController');
        Route::resource('products','ProductController');
        Route::resource('categories','CategoryController');

        Route::post('photos/remove','ProductPhotoController@removePhoto')->name('photo.remove');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


