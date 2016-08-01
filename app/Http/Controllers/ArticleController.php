<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ArticleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $articles = Article::all();
        return view('admin.articles', ['articles' => $articles]);
    }

    public function show($id){
        $article = Article::find($id);
        return view('admin.show', ['article' => $article]);
    }

    public function create(){
        $this->authorize('create'); // проверка кто залогинен
        return view('admin.create');
    }

    public function store(Request $request){
        $this->authorize('create'); // проверка кто залогинен
        Article::create($request->all());
        return redirect('/articles');
    }

    public function edit($id){
        $this->authorize('create'); // проверка кто залогинен
        $article = Article::find($id);
        return view('admin.edit', ['article' => $article]);
    }

    public function update(Request $request, $id){
        $this->authorize('create'); // проверка кто залогинен
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return view('/articles');
    }

    public function delete($id){
        $this->authorize('create'); // проверка кто залогинен
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }

}
