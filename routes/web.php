<?php

use App\Models\Article;
use http\Client\Request;
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

Route::get('/','App\Http\Controllers\ArticleController@show' );
Route::get('articles/{id}',function($id){
    $article = Article::findOrFail($id);
return view('single' , [
    'article' => $article]);
});




Route::prefix('admin')->group(function() {
    Route::get('/articles/create' ,'App\Http\Controllers\ArticleController@create');
    Route::post('/articles/create','App\Http\Controllers\ArticleController@store');
    Route::get('/articles' ,'App\Http\Controllers\ArticleController@index');
    Route::get('/articles/{id}/edit' , function($id) {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit' , [
            'article' => $article
        ]);
    });
    Route::post('/admin/articles/{id}/edit' ,'App\Http\Controllers\ArticleController@update');
    Route::delete('articles/{id}/delet','App\Http\Controllers\ArticleController@destroy');
    Route::put('articles/{id}/like','App\Http\Controllers\ArticleController@like');



});
