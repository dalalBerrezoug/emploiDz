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
    return view('Accuiel');
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
Route::get('/liste/{ville}','listeController@showregion');
Route::get('/rechercheparfonction', function () {
  return view('rechercheparfonction');
 
});
Route::get('/listefonction/{domaine}','listefoncController@show');

Route::get('/rechercheparmotcle', function () {
  return view('rechercheparmotcle');
 
});
Route::get('/rechercheavance', function () {
  return view('rechercheavance');
 
});
/*
Route::get('/offres', function () {
  return view('offres');
 
});*/
Route::get('/recruteurs','RecruteurController@show');
Route::get('/offres','RecruteurController@show1');
//Route::get('/offres','RecruteurController@showOffre');
//Route::get('/offres','OffreController@show');
//Route::get('/offres/{id}','RecruteurController@show1');

Route::get('/offres/{id}','showrecController@show1');
//Route::get('/detail/{id}','OffreController@show');
Route::get('/detail/{id}','showOffreController@show');




//Route::get('/home','PostuleController@index');
/*
Route::get('/detail', function () {
  return view('detail');
 
});*/

Route::post('detail/{id}','PostuleController@store');

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
Route::get('/editRec', function () {
  return view('Recruteur.mastre2');
 
});
Route::get('/master', function () {
  return view('layouts.mastre2');
 
});
Route::get('/masterRec', function () {
  return view('layouts.masterRec');
 
});
Route::get('/InsecriptionRec', function () {
  return view('Recruteur.RecInsecre');
 
});
Route::get('/RECmod',function(){
  return view('Recruteur.ModifierinfoRec');
});
Route::get('Profile', function () {
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
Route::get('/master2',function(){
  return view('layouts.mastre2');
});
Route::get('/editrec',function(){
  return view('Recruteur.editProfileRec');
});
Route::get('/ModifierOffre',function(){
  return view('Recruteur.ModifierOffre');
});
Route::get('/AfficheOffre',function(){
  return view('Recruteur.AfficherLesinfOffre');
});
Route::get('/LogTous',function(){
  return view('TousLogin');
});
Route::get('/cvCondidat',function(){
  return view('cv.CvCondidat');
});
Route::get('/TitreCv',function(){
  return view('cv.createcv');
});
Route::get('/show',function(){
  return view('Recruteur.ShowOffre');
});

//Testttttt
Route::get('/Test','TestrecController@create');
Route::get('ajouterTest/story','TestrecController@store');
Route::get('/Test2','Test2Controller@create');
Route::get('ajouterTest2/story','Test2Controller@store');
//fin Testttt
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
/*Route::get('indexcompetence','CompetenceController@index');
//Route::get('indexcompetence/createcomp','CompetenceController@createcomp');
//Route::post('indexcompetence','CompetenceController@storecomp');
Route::post('cv','CompetenceController@storecomp');
Route::get('indexcompetence/{id}/editcomp','CompetenceController@editcomp');
Route::post('cv/{id}','CompetenceController@updatecomp');*/

//Route::post('indexcompetence/{id}/comp','CompetenceController@updatecomp');

//routes document
/*Route::get('indexdocument','DocumentController@index');
Route::get('indexdocument/createdocument','DocumentController@createdoc');
Route::post('indexdocument','DocumentController@storedoc');
Route::get('indexdocument/{id}/editdoc','DocumentController@editdoc');
Route::post('indexdocument/{id}/doc','DocumentController@updatedoc');*/

//routes profil
Route::get('profil','UserController@index');
Route::get('profil/{id}/editprofil','UserController@edit');
Route::post('profil/{id}/user','UserController@update');

//les routes d'offre
Route::get('ajouter/AjouterOffre','OffreController@create');
Route::get('insere/{id}','OffreController@Store');
Route::get('ConsulterOffre/{id}','OffreController@index');
Route::get('AfficherInfOffre/{id}','OffreController@Affiche_Info');
Route::get('Offre/{id}/modifier','OffreController@edit');
Route::put('Offre/{id}/update/{rec_id}','OffreController@update');
Route::get('Offre/{id}/delete','OffreController@destroy');
Route::get('inserRec','RecruteurController@create');
Route::get('Insertion/{id}','RecruteurController@Store');
Route::get('InfoRec/{user_id}','RecruteurController@index');
Route::get('ContectRec','ContectController@create');
Route::get('Insertion/Contect/{id}','ContectController@Store');
Route::get('AffichageContect/{id}','ContectController@index');
Route::get('ModifContectRec','ContectController@create_modifier');
Route::get('Contect/update/','ContectController@update');
Route::get('ModifProfilRec','RecruteurController@create_modifier_Rec');
Route::get('Profil/update/{id}','RecruteurController@update');
//Route::get('insePtion','Auth\RegisterController@Role')->name('insePtion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('rechercheavance', 'RechercheAvanceeController');
//cette pour cv de condidate tous les fonctions de cv
Route::get('ajouterCv','CvCondidatController@cv_create');
Route::get('AfficherInfoCv','CvCondidatController@Afficher_Info_Cv');
Route::get('titrecv','CvCondidatController@titre_mon_cv');
Route::get('MonCv','CvCondidatController@afficher_cv');
//la fin tous founction cv dans CvCondidatController


//les methode pour les formations 
Route::get('AjouterFormarion','FormationController@index');
Route::get('InsertionFormarion','FormationController@story');
Route::get('UpdateFormarion/{id}','FormationController@index_update_formaation');
Route::get('UpdateForm/{id}','FormationController@Update_Formation');
Route::get('Cv_Condidat','UserController@Cv_Condidat');
//fin les methode de forlation

//*************Experience******* */
Route::get('AjouterExperience','ExperienceController@index');
Route::get('InsertionExperience','ExperienceController@stroy');
Route::get('UpdateExperience/{id}','ExperienceController@index_update');
Route::get('Update/{id}','ExperienceController@Update_Experience');
///fin 



/////comeptences/////////
Route::get('AjouterCompetence','CompetenceController@index');
Route::get('InsertionCompetence','CompetenceController@story');
Route::get('UpdayeCompetence/{id}','CompetenceController@index_update');
Route::get('Updaye/{id}','CompetenceController@Update_Competence');
/////fin_comeptences/////////




//***document */
Route::get('AjouterDocument/{id}','DocumentController@index');
Route::get('InsertionDocument','DocumentController@story');
Route::get('UpdateDocument/{id}','DocumentController@index_update');
Route::get('Update/{id}','DocumentController@Update_Document');
//****fin document */





//Condidat info
Route::get('Condidat','CondidatController@index');
Route::get('ProfilCondidat','CondidatController@condidat_Info');
Route::get('InsertionCondidat','CondidatController@story');
Route::get('UpdateCondidat','CondidatController@index_update');
Route::get('ConferUpdateCondidat','CondidatController@Update_Info');

////**//fin info condidat */
//////statistique/////
Route::get('statique','StatistiqueController@stat_graphe');
Route::get('statique2','StatistiqueController@graphe');
/////statis////////////



/////photo de profile/////
Route::post('profile_update', 'ContectController@update_avatar');
///fin photo de profile////


/////photo de profile de condidat/////
Route::post('updateProfilecondidat','CondidatController@avatar_update');
///fin photo de profile  de condidat////


////ajoute de document//////
Route::post('doc_ajouter/{id}','DocumentController@Ajouter_Doc');
///fin ajoute de document////




//////Divers///////////////
Route::get('divers','DiverController@AjouterDivers');
Route::get('inser_divers','DiverController@Insertion_divers');
Route::get('update_diver/{id}','DiverController@edit_divers');
Route::get('update_div/{id}','DiverController@update');
////////fin divers///////////








///Spontatni cv///
Route::get('voir_cv/{id}','PostuleController@Voir_cv_Spont');
/////fin/////




///logo recruteur///
Route::post('logo','RecruteurController@avatar_update');
/////fin/////