<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
    	$data = Article::latest()->paginate(5);

    	return view('articles/index', [
    		'articles' => $data
    	]);
    }

    public function detail($id)
    {
        $data = Article::find($id);
    	return view('articles/detail', [
            'article' => $data
        ]);
    }

    public function add()
    {
        $data = [
            ["id" => 1, "name" => "News"],
            ["id" => 2, "name" => "Tech"],
        ];

        return view('articles/add', [
            'categories' => $data
        ]);
    }

    public function create(Request $request)
    {
        $article = new Article;
        $article->title = request()->title;
        $article->body  = request()->body;
        $article->category_id = request()->category_id;
        

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/article', $filename);
            $article->image = $filename;
            
            }else {
            return $request;
            $article->image = '';

        }
        $article->save();

        return redirect('/articles');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/articles');
    }



    public function edit($id)
    {

      $article = Article::find($id);
      return view('articles.edit', compact('article'));    
       
       
    }

     public function update(Request $request, $id)

    {    

        $article = Article::find($id);
        $article->title = request('title');
        $article->body = request('body');
        $article->save();
        $article->update($request->except("_token"));

        return redirect('/articles');

 
    
}
}
