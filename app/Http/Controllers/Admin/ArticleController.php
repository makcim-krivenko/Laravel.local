<?php

/*
 * Контроллер работы со статьями в админке
 */

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Gate;


class ArticleController extends Controller
{


    public function index(){
        $articles = Article::all();
        return view('admin.articles.articles', ['articles' => $articles]);
    }

    public function show($id){
        $article = Article::find($id);
        return view('admin.articles.show', ['article' => $article]);
    }

    public function create(){
        return view('admin.articles.create');
    }

    public function store(Request $request){

        Article::create($request->all());
        return redirect('/admin/articles');
    }

    public function edit($id){

        $article = Article::find($id);
        return view('admin.articles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return view('admin.articles.articles');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/admin/articles');
    }

}
