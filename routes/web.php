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



Route::get('/contact/{name}/id/{id}', function ($name,$id) {
     //return view('contact');
     echo "contact name:".$name;
     echo "<br> contact id:".$id;

    
 })->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);

 Route::get('/articles','ArticleController@articles');
 Route::get('/article/{id}','ArticleController@article');


 Route::get('/newArticle','ArticleController@newArticle');
 Route::get('/listarticles','ArticleController@listArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accueil', function () {
   return view('accueil');
  
});

Route::get('/rechercheparregion', function () {
   return view('rechercheparregion');
  
});
Route::get('/rechercheparfonction', function () {
   return view('rechercheparfonction');
  
});
Route::get('/rechercheparmotcle', function () {
   return view('rechercheparmotcle');
  
});Route::get('/rechercheavance', function () {
   return view('rechercheavance');
  
});

Route::get('cont', function () {
   return view('contacte');
  
});

