<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
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

Route::get('/', [TodoListController::class, 'index'] )->name('index');

/*Route::get('/saveItemRoute', function () {

    return view('welcome');

})->name('saveItem');*/

Route::post('saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('markCompleteRoute{id}', [TodoListController::class, 'markComplete'])->name('markComplete');


/*Route::get('/about', function () {
    return "Hi Page Im About";
});

Route::get('/contact', function () {
    return "Hi page Im Contact";
});

Route::get('/post/{id}/{name}', function ($id, $name){
    return "This is post number ". $id . " " . $name;
});

Route::get('/admin/posts/example', array ('as' => 'admin.home' ,function (){

        $url = route('admin.home');

        return " this url is". $url;

}));

use App\Http\Controllers\CRUD;

Route::get('post1/', function ($id) {
    return "sample token";
});

Route::get('Hallow/{id}', [CRUD::class, 'index']);



Route::get('/contact', function () {
    return "Hi page Im Contact";
});
Route::resource('sample', CRUD::class);

Route::get('sampleview/', [CRUD::class, 'sampleview']);

Route::get('demoview/{id}', [CRUD::class, 'showview']);

//DATABASE RAW QUERIES

//inserting data
Route::get('/insert', function(){

    DB::insert('insert into sample(title, body) values (?, ?)', ['PHP with Laravel','Laravel is the best thing']);

});

//reading data
Route::get('/read', function(){

    $results = DB::select('select * from sample where id =?',   [1]);

    foreach ($results as $sample){

            return $sample->title;
    }


});

//update data
Route::get('/update', function(){

      $updated = DB::update('update sample set title = "Update Title" where id = ?', [1]);

      return $updated;
});


Route::get('/delete', function(){

    $deleted = DB::delete('delete from sample where id =?', [1]);

    return $deleted;


});
*/
// ELOQUENT RELATIONSHIPS

Route::get('/user/{id}/sample', function($id){

    return User::find($id)->sample;

});

