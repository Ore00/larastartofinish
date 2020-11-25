<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::all();
        $articles = Article::orderBy('created_at','desc')->paginate(4);
        $users = User::all();
        $tags = Tag::all();
        return view('articles.index', compact('articles','users','tags'));
    }
    /**
     *
     */
    public function main()
    {
        $articles = Article::where('user_id', 2)->orderBy('title', 'desc')->take(4)->get();
        $tags = Tag::all();
        return view('welcome', ['articles' => $articles, 'tags' => $tags]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // if(Auth::user()->is_admin == 1){
            return view('articles.create');
        // }
        // else {
        //   return redirect('home');
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($file = $request->file('image')){
            $name = $file->getClientOriginalName();
            $post = new Article;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->published_at = $request->input('date');
            $post->image = $name;
            $post->save();
            $file->move('images/upload', $name);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $tags = Article::find($article->id)->tags;
        $article = Article::find($article->id);
        $comments = $article->comments;
        $user = User::find($article->user_id);
        $country = Country::where('id', $user->country_id)->get()->first();

        return view('articles.show', compact('tags', 'article', 'comments', 'user','country'));
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function articles($id)
    {
        $user = User::find($id);

        return view('articles.articles', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
