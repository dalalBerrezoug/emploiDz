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

public function create()
{

    return view('article.create');
}
    public function store(Request $request)
    {
        $article = new Article();
        $article->name = $request->input('nom');
        $article->description = $request->input('description');
        $article->save();
        return redirect('articles');
    }

    public function index()
    {
        $listArticle = Article::all();
        return view('article.index',['articles'=>$listArticle]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit',['article'=>$article]);
    }

    public function update(Request $request , $id)
    {
        $article = Article::find($id);
        $article->name  = $request->input('nom');
        $article->description  = $request->input('description');
        $article->save();
        return redirect('articles');
    }
/* 
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('article');
    }*/

}
