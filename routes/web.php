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
 
});
Route::get('/rechercheavance', function () {
  return view('rechercheavance');
 
});

Route::get('/actualite', function () {
  return view('actualite');
 
});
Route::get('/Accuiel', function () {
  return view('Accuiel');
 
});

Route::get('/modelecv', function () {
  return view('modelecv');
 
});

Route::get('/seconnecte', function () {
  return view('connecte');
 
});

Route::get('/edit', function () {
  return view('profil.editprofil');
 
});



Route::get('/cont', function () {
  return view('contacte');
 
});
Route::get('/master', function () {
  return view('layouts.master');
 
});
Route::get('/masterRec', function () {
  return view('layouts.masterRec');
 
});
Route::get('/InsecriptionRec', function () {
  return view('Recruteur.InsecriptionRec');
 
});
Route::get('/Profile', function () {
  return view('Recruteur.Profile');
 
});
Route::get('/PageRec',function(){
  return view('layouts.master');
});
Route::get('/AjouterOffre',function(){
  return view('Recruteur.AjouterOffre');
});
Route::get('/consulteroffre',function(){
  return view('Recruteur.ConsulterMeOffre');
});
Route::get('/tablebord',function(){
  return view('Recruteur.TableBorde');
});

Route::get('/mod',function(){
  return view('Recruteur.modifrieroffre');
});
Route::get('/Recruteur',function(){
  return view('Recruteur.recruteur');
});
Route::get('/ModifierOffre',function(){
  return view('Recruteur.ModifierOffre');
});
Route::get('articles/create','ArticleController@create');
Route::post('articles','ArticleController@store');
Route::get('articles','ArticleController@index');
Route::get('articles/{id}/edit','ArticleController@edit');
Route::put('articles/{id}','ArticleController@update');
//Route::delete('articles/{id}','ArticleController@destroy');


Route::get('cv','CvController@index');
Route::get('cv/create','CvController@create');
Route::post('cv','CvController@store');
Route::get('cv/{id}/editcv','CvController@edit');
Route::post('cv/{id}','CvController@update');
//Route::delete('cv/{id}','CvController@destroy');
//routes experiences
Route::get('experience','ExperienceController@index');
Route::get('experience/createexp','ExperienceController@createexp');
Route::post('experience','ExperienceController@storeexp');
Route::get('experience/{id}/editexp','ExperienceController@editexp');
Route::post('experience/{id}/exp','ExperienceController@updateexp');

//routes formations

Route::get('indexformation','FormationController@index');
Route::get('indexformation/createform','FormationController@createform');
Route::post('indexformation','FormationController@storeform');
//Route::post('cv','FormationController@storeform');
Route::get('indexformation/{id}/editform','FormationController@editform');
Route::post('indexformation/{id}/form','FormationController@updateform');
//Route::post('cv/{id}','FormationController@updateform');

//routes competence
Route::get('indexcompetence','CompetenceController@index');
Route::get('indexcompetence/createcomp','CompetenceController@createcomp');
//Route::post('indexcompetence','CompetenceController@storecomp');
Route::post('cv','CompetenceController@storecomp');
Route::get('indexcompetence/{id}/editcomp','CompetenceController@editcomp');
Route::post('cv/{id}','CompetenceController@updatecomp');

//Route::post('indexcompetence/{id}/comp','CompetenceController@updatecomp');

//routes document
Route::get('indexdocument','DocumentController@index');
Route::get('indexdocument/createdocument','DocumentController@createdoc');
Route::post('indexdocument','DocumentController@storedoc');
Route::get('indexdocument/{id}/editdoc','DocumentController@editdoc');
Route::post('indexdocument/{id}/doc','DocumentController@updatedoc');

//routes profil
Route::get('profil','UserController@index');
Route::get('profil/{id}/editprofil','UserController@edit');
Route::post('profil/{id}/user','UserController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
