<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function articles(){
        echo "afficher l'article";
    }

    public function article($id){
        echo "afficher l'article".$id;
    }

public function newArticle()
{
    $newArticle = new Article();
    $newArticle->name = "stylo";
    $newArticle->description = "stylo a bille de haute qualité..";
    $newArticle->save(); // pou enregistrer l'article dans la bdd
    
}

public function listArticle()
{
    $articles = Article::all();
    //print_r($articles);// print_r pour afficher un objet

    return view('articles',['articles'=>$articles]);
}
}
