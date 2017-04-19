<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);


Route::get('/posts',[
    'uses' => 'PostsController@index',
    'as'   => 'all_posts'
]);
Route::get('/post/{slug}',[
    'uses' => 'PostsController@getPost',
    'as' => 'get_post',
]);

Route::get('/category/{slug}',[
    'uses' => 'PostsController@getPostsByCategory',
    'as' => 'get_posts_by_cat',
]);



Route::group(['prefix' => 'json'], function (){

    Route::get('/posts',[
        'uses' => 'PostsJsonController@index',
        'as'   => 'all_posts_json'
    ]);
    Route::get('/post/{slug}',[
        'uses' => 'PostsJsonController@getPost',
        'as' => 'get_post_json',
    ]);


});

Route::group(['prefix' => 'admin'], function (){

    Route::get('/posts',[
        'uses' => 'Admin\AdminController@getPosts',
        'as'   => 'all_posts'
    ]);
    Route::get('/post/{post}',[
        'uses' => 'Admin\AdminController@getPost',
        'as' => 'get_post_admin',
        'middleware' => 'mymiddle'
    ]);

});





