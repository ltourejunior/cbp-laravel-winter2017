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

Route::get('', 'HomepageController')->name('home');

Route::get('post/{id?}', 'BlogPostController@post_detail')
    ->name('post_detail')
    ->where('id', '[0-9]+');

Route::get('list', 'BlogPostController@post_list')
    ->name('post_list');



Route::get('welcome', function () {
    
    // view object is prepared
    $welcome_view = view('welcome');

    // view object is returned (to be rendered and output)
    return $welcome_view;
});

/*
$route = Route::get('foo{param}', function($param) {

    $some_view = new view('foo/foo');
    $some_view->param = $param;

    return $some_view;

});
$route->name('foo name');
$route->where('param', '[0-9]+'); // param must be a number

Route::get('bar{param}', function() {})->name('bar name')->where('param', '[0-9]+');
*/

Route::get('contact/{who?}', function($who = null) {


    $contact_view = view('contact');
    $contact_view->who = $who;
    $contact_view->recipients =  ['Stuart', 'Kevin', 'Bob'];

    return $contact_view;
    
})->name('contact someone');

/*
Route::get('product/{id}', function($product_id) {
    return 'This is product '.$product_id;
})->where('id', '[0-9]+')->name('product detail');

Route::get('product/123', function() {
    return 'This is a specific page';
});

Route::get('contact/detail', function () {
    return 'Contact form detail <a href="'.route('contact someone', ['whom' => 'Jan']).'">Contact Jan</a>';
});

Route::get('contact/form/{whom}', function ($whom) {
    return 'Contact form addressing '.$whom;
})->where('whom', '[a-zA-Z]+')->name('contact someone');



Route::get('notexists', function() {
    return redirect('');
});

Route::get('ajax_call', function () {
    return array(
        'name' => 'Jan',
        'job' => 'Instructor'   
    );
});
*/
